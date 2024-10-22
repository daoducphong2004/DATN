<?php

namespace App\Http\Controllers;

use App\Models\PurchasedStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        // Lấy tất cả các truyện đã mua của người dùng hiện tại
        $purchasedStories = PurchasedStory::where('user_id', Auth::id())->with('chapter','book')->get();

        // Trả về view với dữ liệu
        return view('user.purchase-history', compact('purchasedStories'));
    }
}
