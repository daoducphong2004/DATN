<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Book;
use App\Models\User;
use App\Http\Requests\ContractRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContractController extends Controller
{
    /**
     * Display a listing of the contracts.
     */
    public function index()
    {
        $user = User::with('contract')->find(Auth::id());

        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập nếu không có người dùng
        }

        // Lấy danh sách vai trò cho phép (author trở lên)
        $allowedRoles = Role::whereIn('name', ['author', 'mod', 'admin', 'super_admin'])->pluck('id');

        // Kiểm tra vai trò của người dùng
        if ($allowedRoles->contains($user->role_id)) {
            // Nếu là author trở lên, kiểm tra hợp đồng
            if ($user->contract == null) {
                // Nếu không có hợp đồng, chuyển đến trang tạo hợp đồng
                return redirect()->route('contracts.create')->with('message', 'Bạn chưa có hợp đồng. Vui lòng tạo hợp đồng mới.');
            }
            // Nếu có hợp đồng, chuyển đến trang chi tiết hợp đồng
            return redirect()->route('contracts.show', $user->contract->id);
        }

        // Nếu người dùng không phải author trở lên, hiển thị trang 403 (cấm truy cập)
        abort(403, 'Bạn không có quyền truy cập vào trang này.');
    }


    /**
     * Show the form for creating a new contract.
     */
    public function create()
    {
        $user = User::findOrFail(Auth::id());
        if ($user->contract) {
            return redirect()->route('contracts.show',  $user->contract->id)->with('mesage', 'Bạn đã có hợp đồng');
        }
        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập nếu không có người dùng
        }

        // Kiểm tra vai trò của người dùng
        if ($user->role_id == Role::where('name', 'author')->first()->id) {
            // Nếu là tác giả, hiển thị trang 403 (cấm truy cập)
            return view('user.contracts.create', compact('user'));
        }
        if ($user->role_id == Role::where('name', 'user')->first()->id) {
            // Nếu là người dùng, hiển thị trang 403 (cấm truy cập)
            abort(403, 'Bạn không có quyền truy cập vào trang này.');
        }
        return view('user.contracts.create', compact('user'));
    }

    /**
     * Store a newly created contract in storage.
     */
    public function store(ContractRequest $request)
    {

        $user = Auth::user();
        $allowedRoles = Role::whereIn('name', ['author', 'mod', 'admin', 'super_admin'])->pluck('id');

        // Chỉ cho phép tạo hợp đồng nếu vai trò của người dùng là author trở lên
        if ($allowedRoles->contains($user->role_id)) {
            // Tạo hợp đồng mới
            $contract = Contract::create($request->validated());
            // Tạo nội dung điều khoản cho hợp đồng
            $contract->terms = "
        <h4>Điều 1: Mục Đích</h4>
        <p>Hợp đồng này được lập ra nhằm mục đích quy định các điều khoản và điều kiện liên quan đến việc xuất bản và phân phối truyện của Tác giả bởi Trang web Novel Pub.</p>

        <h4>Điều 2: Thời Gian Hợp Đồng</h4>
        <ul>
            <li><strong>Ngày Bắt Đầu:</strong> {$contract->start_date}</li>
            <li><strong>Ngày Kết Thúc:</strong> {$contract->end_date}</li>
        </ul>

        <h4>Điều 3: Phần Trăm Chia Sẻ Doanh Thu</h4>
        <p>Công ty sẽ trả cho Tác giả phần trăm chia sẻ doanh thu từ việc bán truyện như sau:</p>
        <ul>
            <li><strong>Phần Trăm Chia Sẻ:</strong> {$contract->revenue_share}%</li>
        </ul>

        <h4>Điều 4: Phương Thức Thanh Toán</h4>
        <ul>
            <li><strong>Số Tiền Thanh Toán:</strong> {$contract->revenue_share}% tổng doanh thu của tháng</li>
            <li><strong>Phương Thức Thanh Toán:</strong> Chuyển tiền vào ví tác giả.</li>
            <li><strong>Ngày Hạn Thanh Toán:</strong> 15 hàng tháng cho đến khi hết hợp đồng</li>
        </ul>

        <h4>Điều 5: Trách Nhiệm của Tác Giả</h4>
        <ul>
            <li>Đảm bảo nội dung truyện không vi phạm bản quyền và pháp luật.</li>
            <li>Cung cấp nội dung truyện đầy đủ và đúng hạn.</li>
            <li>Đảm bảo truyện không chứa nội dung nào trái với đạo đức và pháp luật.</li>
        </ul>

        <h4>Điều 6: Trách Nhiệm của Công Ty</h4>
        <ul>
            <li>Đảm bảo thanh toán đúng hạn cho Tác giả theo phần trăm chia sẻ doanh thu đã thỏa thuận.</li>
            <li>Đảm bảo bảo mật thông tin của Tác giả và truyện.</li>
            <li>Đảm bảo không phân phối hoặc sử dụng truyện cho mục đích khác mà không có sự đồng ý của Tác giả.</li>
        </ul>

        <h4>Điều 7: Điều Khoản Chấm Dứt Hợp Đồng</h4>
        <ul>
            <li>Một bên vi phạm các điều khoản của hợp đồng mà không sửa chữa trong vòng 30 ngày kể từ ngày nhận được thông báo bằng văn bản từ bên kia.</li>
            <li>Một bên có thể đơn phương chấm dứt nếu báo cáo trước 30 ngày.</li>
            <li>Hợp đồng hết hạn và không được gia hạn.</li>
        </ul>

        <h4>Điều 8: Giải Quyết Tranh Chấp</h4>
        <p>Mọi tranh chấp phát sinh từ hoặc liên quan đến hợp đồng này sẽ được giải quyết thông qua thương lượng giữa các bên. Nếu không thể giải quyết thông qua thương lượng, tranh chấp sẽ được đưa ra tòa án có thẩm quyền để giải quyết.</p>

        <h4>Điều 9: Hiệu Lực Hợp Đồng</h4>
        <p>Hợp đồng này có hiệu lực từ ngày {$contract->start_date} và scẽ tiếp tục có hiệu lực cho đến khi bị chấm dứt theo Điều 7.</p>
        ";

            // Lưu hợp đồng với điều khoản
            $contract->save();
            // Nếu là tác giả, chuyển hướng đến trang hiển thị hợp đồng cho tác giả
            return redirect()->route('contracts.show', $contract->id);
        }
        else {
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

    /**
     * Remove the specified contract from storage.
     */
}
