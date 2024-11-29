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
        $c = new Contract();
        if($c->hasContract($request->user_id)){
            return redirect()->back()->withErrors(['errors' => 'Người dùng này đã có hợp đồng không thể tạo thêm']);
        }
        $contract = Contract::create($request->validated());
        $contract->contract_code = "cd" . $contract->id;
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
       <p>Hợp đồng này có hiệu lực từ ngày {$contract->start_date} và sẽ tiếp tục có hiệu lực cho đến khi bị chấm dứt theo Điều 7.</p>
       ";
       if ($request->hasFile('contract_image')) {
        // Xóa ảnh cũ nếu có
        if ($contract->contract_image) {
            Storage::disk('public')->delete($contract->contract_image);
        }
        // Lưu ảnh mới
        $contract->contract_image = $request->file('contract_image')->store('contracts', 'public');
    }
        $contract->save();

        return redirect()->route('contracts-manage.index')->with('success', 'Contract created successfully');
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
    public function update(ContractRequest $request, Contract $contracts_manage)
    {
        // Cập nhật thông tin hợp đồng
        $contracts_manage->update($request->validated());

        // Cập nhật ảnh hợp đồng nếu có
        if ($request->hasFile('contract_image')) {
            // Xóa ảnh cũ nếu có
            if ($contracts_manage->contract_image) {
                Storage::disk('public')->delete($contracts_manage->contract_image);
            }
            // Lưu ảnh mới
            $contracts_manage->contract_image = $request->file('contract_image')->store('contracts', 'public');
        }

        // Cập nhật điều khoản
        $contracts_manage->terms = $request->terms;
        $contracts_manage->save();

        return redirect()->route('contracts.index')->with('success', 'Hợp đồng đã được cập nhật thành công');
    }


    // Xóa hợp đồng
    public function destroy(string $contract)
    {
        $dele = Contract::findOrFail($contract);
        $dele->delete();
        return redirect()->route('contracts-manage.index')->with('success', 'Contract deleted successfully');
    }
}
