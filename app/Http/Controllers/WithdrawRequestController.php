<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\Auth;

class WithdrawRequestController extends Controller
{
    public function create()
    {
        $wallet = Auth::user()->wallet;
        return view('action.withdraw.create',compact('wallet'));
    }
    public function showU(){
        $withdraws = WithdrawRequest::where('user_id',Auth::id())->get();
        return view('action.withdraw.index',compact('withdraws'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:10', // Số tiền tối thiểu rút là 10
        ]);

        WithdrawRequest::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Yêu cầu rút tiền đã được gửi!');
    }

    public function index()
    {
        $withdrawRequests = WithdrawRequest::where('status','pending');
        return view('admin.withdraw.index', compact('withdrawRequests'));
    }
    public function HistoryAmin(){
        $withdrawRequests = WithdrawRequest::whereIn('status', ['approved', 'rejected'])->get();
        return view('admin.withdraw.history', compact('withdrawRequests'));
    }
    public function update(Request $request, $id)
{
    $withdrawRequest = WithdrawRequest::findOrFail($id);

    // Lưu trạng thái cũ để kiểm tra
    $oldStatus = $withdrawRequest->status;

    \DB::beginTransaction();
    try {
        // Cập nhật trạng thái và ghi chú
        $withdrawRequest->update([
            'status' => $request->status,
            'note' => $request->note,
        ]);

        // Xử lý giao dịch khi trạng thái thay đổi
        if ($request->status === 'approved' && $oldStatus !== 'approved') {
            $withdrawRequest->createTransaction('approved');
        } elseif ($request->status === 'rejected' && $oldStatus !== 'rejected') {
            $withdrawRequest->createTransaction('rejected');
        }

        \DB::commit(); // Lưu thay đổi vào database
    } catch (\Exception $e) {
        \DB::rollBack(); // Hoàn tác các thay đổi nếu có lỗi
        return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
    }

    return redirect()->back()->with('success', 'Trạng thái yêu cầu đã được cập nhật!');
}

}
