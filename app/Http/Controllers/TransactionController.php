<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactions($wallet_id)
    {
        // Tìm ví theo ID
        $wallet = Wallet::findOrFail($wallet_id);

        // Eager load relationships to prevent N+1 query issue
        $transactions = Transaction::with(['purchasedStory.user', 'purchasedStory.chapter', 'purchasedStory.chapter.book'])
            ->where('wallet_id', $wallet_id)
            ->where('type', 'coin')
            ->latest()
            ->get();

        // Trả dữ liệu cho view
        return view('user.transactions', compact('transactions', 'wallet'));
    }
    public function getRevenueData(Request $request)
    {
        $user_id = $request->input('user_id');
        $type = $request->input('type');
        $walletId = $request->input('wallet_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $data = Transaction::revenueByDateRangeAndBook($user_id,$type, $walletId, $startDate, $endDate);

        return response()->json($data);
    }
    public function getRevenueBookData(Request $request)
    {
        $type = $request->input('type');
        $user_id = $request->input('user_id');
        $walletId = $request->input('wallet_id');
        $story_id = $request->input('story_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        // Đảm bảo thứ tự tham số khớp với hàm revenueByStoryId
        $data = Transaction::revenueByStoryId($user_id,$type, $walletId, $story_id, $startDate, $endDate);
        return response()->json($data);
    }
    public function getRevenueBookChapterData(Request $request)
    {
        $type = $request->input('type');
        $user_id = $request->input('user_id');

        $walletId = $request->input('wallet_id');
        $story_id = $request->input('story_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        // Đảm bảo thứ tự tham số khớp với hàm revenueByStoryId
        $data = Transaction::revenueByChapter($user_id,$type, $walletId, $story_id, $startDate, $endDate);
        return response()->json($data);
    }
    
}
