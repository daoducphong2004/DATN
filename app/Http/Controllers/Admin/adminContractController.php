<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractRequest;
use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminContractController extends Controller
{
    // Hiển thị danh sách hợp đồng
    public function index()
    {
        $contracts = Contract::with('user')->get();
        return view('admin.contracts.index', compact('contracts'));
    }

    // Hiển thị trang tạo hợp đồng
    public function create()
    {
        $users = User::all();
        $random = random_int(1, 9999);
        return view('admin.contracts.create', compact('users', 'random'));
    }

    // Lưu hợp đồng mới
    public function store(ContractRequest $request)
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
            return redirect()->route('contracts-manage.show', $contract->id);
        } else {
            // Người dùng không đủ quyền
            return redirect()->back()->with('error', 'Bạn không có quyền tạo hợp đồng.');
        }
    }

    // Hiển thị hợp đồng cụ thể
    public function show(string $id)
    {
        $contract = Contract::findOrFail($id);
        return view('admin.contracts.show', compact('contract'));
    }

    // Hiển thị trang chỉnh sửa hợp đồng
    public function edit(Contract $contracts_manage)
    {
        $users = User::all();
        return view('admin.contracts.edit', compact('contracts_manage', 'users'));
    }

    // Cập nhật hợp đồng
    public function update(Request $request, Contract $contracts_manage)
    {
        try {
            // Lấy dữ liệu đã được validate từ ContractRequest
            $data = $request->all();
    
            // Cập nhật thông tin hợp đồng trừ ảnh
            $contracts_manage->update($data);
    
            // Kiểm tra nếu có ảnh mới được tải lên
            if ($request->hasFile('contract_image')) {
                // Xóa ảnh hợp đồng cũ nếu tồn tại
                if (!empty($contracts_manage->contract_image)) {
                    Storage::disk('public')->delete($contracts_manage->contract_image);
                }
    
                // Lưu ảnh hợp đồng mới và cập nhật đường dẫn
                $newImagePath = $request->file('contract_image')->store('contracts', 'public');
                $contracts_manage->contract_image = $newImagePath;
            }
    
            // Lưu lại các thay đổi
            $contracts_manage->save();
    
            // Chuyển hướng với thông báo thành công
            return redirect()->route('contracts-manage.index')->with('success', 'Hợp đồng đã được cập nhật thành công.');
        } catch (\Exception $e) {
            // Ghi log lỗi và trả về thông báo thất bại
            \Log::error("Cập nhật hợp đồng thất bại: " . $e->getMessage());
    
            return redirect()->route('contracts-manage.index')->with('error', 'Có lỗi xảy ra, vui lòng thử lại.');
        }
    }
    


    // Xóa hợp đồng
    public function destroy(string $contract)
    {
        $dele = Contract::findOrFail($contract);
        $dele->delete();
        return redirect()->route('contracts-manage.index')->with('success', 'Contract deleted successfully');
    }
}
