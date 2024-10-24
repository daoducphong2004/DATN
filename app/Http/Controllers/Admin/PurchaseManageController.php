<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PurchasedStory;
use App\Models\User;
use Illuminate\Http\Request;

class PurchaseManageController extends Controller
{
    public function index()
    {
        $users = User::withCount('purchasedStories')->paginate(10);
        // dd($allUser);

        return view('admin.purchase_history.index',compact('users'));
    }
    public function showUserPurchasedChapters(User $user)
    {
        // Lấy danh sách chương đã mua cùng với thông tin về tập và truyện
        $purchasedChapters = PurchasedStory::with(['chapter.episode.book'])
            ->where('user_id', $user->id)
            ->get();

        return view('admin.purchase_history.show', compact('user', 'purchasedChapters'));
    }
}
