<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\User;
use App\Http\Requests\ContractRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;

class ContractController extends Controller
{
    /**
     * Display a listing of the contracts.
     */
    public function index()
    {
        $user = User::with('contracts')->find(Auth::id());

        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập nếu không có người dùng
        }

        // Lấy danh sách vai trò cho phép (author trở lên)
        $allowedRoles = Role::whereIn('name', ['author', 'mod', 'admin', 'super_admin'])->pluck('id');

        // Kiểm tra vai trò của người dùng
        if ($allowedRoles->contains($user->role_id)) {
            $contracts = Contract::where('user_id', $user->id)->get();
            return view('user.contracts.index', compact('contracts'));
        }

        // Nếu người dùng không phải author trở lên, hiển thị trang 403 (cấm truy cập)
        abort(403, 'Bạn không có quyền truy cập vào trang này.');
    }

    public function dieukhoan()
    {
        return view('user.contracts.dieukhoan');
    }

    /**
     * Show the form for creating a new contract.
     */

    public function create()
    {
        $user = User::findOrFail(Auth::id());

        // Kiểm tra hợp đồng hiện tại của người dùng
        $activeContract = $user->contracts()->where('status', 'active')->first();

        if ($activeContract) {
            return redirect()->route('contracts.index')
                ->with('message', 'Bạn đã có hợp đồng đang hoạt động.');
        }

        // Kiểm tra nếu người dùng có hợp đồng cũ (hết hạn hoặc bị hủy)
        $expiredOrTerminatedContract = $user->contracts()
            ->whereIn('status', ['expired', 'terminated'])
            ->orderBy('end_date', 'desc')
            ->first();

        if ($expiredOrTerminatedContract) {
            // Hiển thị thông báo nếu hợp đồng cũ đã tồn tại nhưng không còn hiệu lực
            session()->flash('info', 'Hợp đồng trước đây của bạn đã hết hạn hoặc bị hủy. Bạn có thể tạo hợp đồng mới.');
        }

        // Kiểm tra vai trò của người dùng
        if ($user->role_id == Role::where('name', 'author')->first()->id) {
            // Nếu là tác giả, hiển thị trang tạo hợp đồng
            return view('user.contracts.create', compact('user'));
        }

        if ($user->role_id == Role::where('name', 'user')->first()->id) {
            // Nếu là người dùng, hiển thị lỗi 403
            abort(403, 'Bạn không có quyền truy cập vào trang này.');
        }

        return view('user.contracts.create', compact('user'));
    }


    /**
     * Store a newly created contract in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $allowedRoles = Role::whereIn('name', ['author', 'mod', 'admin', 'super_admin'])->pluck('id');

        // Chỉ cho phép tạo hợp đồng nếu vai trò của người dùng là author trở lên
        if ($allowedRoles->contains($user->role_id)) {
            // Generate a random contract code (e.g., 10 characters)
            $contractCode = Str::random(10);  // You can change the length to whatever you want

            // Tạo hợp đồng mới với dữ liệu từ form
            $contract = Contract::create([
                'user_id' => $request['user_id'],
                'revenue_share' => $request['revenue_share'],
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'status' => 'pending',
                'tax' => $request['tax'],
                'fullname' => $request['fullname'],
                'contract_code' => $contractCode,  // Assign the random contract code
                // Thêm các trường dữ liệu cần thiết khác từ yêu cầu (nếu có)
            ]);

            // Lưu hợp đồng (nếu cần)
            $contract->save();

            // Nếu là tác giả, chuyển hướng đến trang hiển thị hợp đồng cho tác giả
            return redirect()->route('contracts.show', $contract->id);
        } else {
            // Người dùng không đủ quyền
            return redirect()->back()->with('error', 'Bạn không có quyền tạo hợp đồng.');
        }
    }

    /**
     * Display the specified contract.
     */
    public function show(string $contract)
    {
        // Tìm hợp đồng theo ID hoặc báo lỗi nếu không tìm thấy
        $contract = Contract::with('user')->findOrFail($contract);

        // Kiểm tra xem người dùng đã đăng nhập có phải là chủ sở hữu hợp đồng hay không
        if (Auth::id() !== $contract->user->id) {
            abort(403, 'Bạn không có quyền truy cập vào hợp đồng này.');
        }

        // Kiểm tra vai trò của người dùng
        $user = Auth::user();

        // Nếu là tác giả, chuyển hướng đến trang hiển thị hợp đồng cho tác giả
        return view('user.contracts.show', compact('contract'));
    }
    public function updateImage(Request $request, $id)
    {
        $request->validate([
            'contract_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validates image type and size
        ]);

        // Find the contract by ID
        $contract = Contract::findOrFail($id);
        // Cập nhật ảnh hợp đồng nếu có
        if ($request->hasFile('contract_image')) {
            // Xóa ảnh cũ nếu có
            if ($contract->contract_image) {
                Storage::disk('public')->delete($contract->contract_image);
            }
            // Lưu ảnh mới
            $contract->contract_image = $request->file('contract_image')->store('contracts', 'public');
        }

        // Update the contract image path
        $contract->save();

        return redirect()->back()->with('success', 'Contract image updated successfully.');
    }
    /**
     * Show the form for editing the specified contract.
     */
    public function edit(string $contract)
    {
        // Tìm hợp đồng theo ID hoặc báo lỗi nếu không tìm thấy
        $contract = Contract::with('user')->findOrFail($contract);

        // Kiểm tra xem người dùng đã đăng nhập có phải là chủ sở hữu hợp đồng hay không
        if (Auth::id() !== $contract->user->id) {
            abort(403, 'Bạn không có quyền truy cập vào hợp đồng này.');
        }

        // Kiểm tra vai trò của người dùng
        $user = Auth::user();
        $adminRoleId = Role::where('name', 'admin')->first()->id;
        if ($user->role_id == Role::where('name', 'author')->first()->id) {
            // Nếu là tác giả, chuyển hướng đến trang hiển thị hợp đồng cho tác giả
            return view('user.contracts.edit', compact('contract', 'user', 'adminRoleId'));
        }

        // Lấy danh sách người dùng để hiển thị trên trang chỉnh sửa
        $users = User::all();

        // Nếu không phải tác giả, trả về trang chỉnh sửa hợp đồng cho admin
        return view('admin.contracts.edit', compact('contract', 'user'));
    }

    /**
     * Update the specified contract in storage.
     */
    public function update(ContractRequest $request, Contract $contract)
    {
        $contract->update($request->validated());
        return redirect()->route('contracts.index')->with('success', 'Contract updated successfully');
    }
    public function qanda()
    {
        return view('user.contracts.q&a');
    }
    /**
     * Remove the specified contract from storage.
     */
}
