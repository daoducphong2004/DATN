<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\bookcomment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryManageController extends Controller
{


    // Hàm để hiển thị ra danh sách truyện người dùng đăng
    public function StoryTranslatelist()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $userInfor = User::findOrFail($user->id);

        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        // $userBooks = $userInfor->books; // Truyện do user đăng
        // $bookHasJoin = $userInfor->sharedBooks; // Truyện user được chia sẻ quyền
        $countBook = Book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type',1) // Điều kiện lấy truyện dịch
            ->paginate(5);
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryTranslateListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks()->where('type',1)->paginate(5); // Truyện user được chia sẻ quyền
        return view('user.ListTruyenUser', compact('user', 'books'));
    }

    public function StoryOLNlist()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $userInfor = User::findOrFail($user->id);

        // Trả về view với dữ liệu
     
        $countBook = book::where('user_id', $userInfor->id)->count();
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type',3) // Điều kiện lấy truyện dịch
            ->paginate(5);
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryOLNListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks()->where('type',3)->paginate(5); // Truyện user được chia sẻ quyền
        return view('user.ListTruyenUser', compact('user', 'books'));
    }

    public function StoryConvertlist()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $userInfor = User::findOrFail($user->id);

        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        // $userBooks = $userInfor->books; // Truyện do user đăng
        // $bookHasJoin = $userInfor->sharedBooks; // Truyện user được chia sẻ quyền
        $countBook = Book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type',2) // Điều kiện lấy truyện dịch
            ->paginate(5);
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryConvertListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks()->where('type',2)->paginate(5); // Truyện user được chia sẻ quyền
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
}
