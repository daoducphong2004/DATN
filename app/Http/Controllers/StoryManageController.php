<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\bookcomment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryManageController extends Controller
{


    // Hàm để hiển thị ra danh sách truyện người dùng đăng
    public function Storylist()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $userInfor = User::findOrFail($user->id);

        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        $userBooks = $userInfor->books; // Truyện do user đăng
        $bookHasJoin = $userInfor->sharedBooks; // Truyện user được chia sẻ quyền
        $countBook = book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->get();
        return view('user.truyenDaDang', compact('user', 'books', 'userBooks'));
    }
}
