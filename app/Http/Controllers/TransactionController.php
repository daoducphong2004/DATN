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
        $type = $request->input('type');
        $walletId = $request->input('wallet_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $data = Transaction::revenueByDateRangeAndBook($type, $walletId, $startDate, $endDate);

        return response()->json($data);
    }
}
