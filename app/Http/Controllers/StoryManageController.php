<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\bookcomment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\StoryApprovalNotification;

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
        $countBook = book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type', 1) // Điều kiện lấy truyện dịch
            ->get();
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryTranslateListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks->where('type', 1); // Truyện user được chia sẻ quyền
        return view('user.ListTruyenUser', compact('user', 'books'));
    }

    public function StoryOLNlist()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $userInfor = User::findOrFail($user->id);

        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        // $userBooks = $userInfor->books; // Truyện do user đăng
        // $bookHasJoin = $userInfor->sharedBooks; // Truyện user được chia sẻ quyền
        $countBook = book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type', 3) // Điều kiện lấy truyện dịch
            ->get();
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryOLNListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks->where('type', 3); // Truyện user được chia sẻ quyền
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
        $countBook = book::where('user_id', $userInfor->id)->count();
        // Lấy danh sách truyện của người dùng đang đăng nhập
        $books = Book::with('user', 'group') // Tải trước quan hệ user và group
            ->where('user_id', $userId) // Điều kiện lấy truyện của user hiện tại
            ->where('type', 2) // Điều kiện lấy truyện dịch
            ->get();
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    // Hàm dùng để hiển thị ra danh sách truyện được chia sẻ
    public function StoryConvertListShare()
    {
        $user = Auth::user();
        $books = $user->sharedBooks->where('type', 2); // Truyện user được chia sẻ quyền
        return view('user.ListTruyenUser', compact('user', 'books'));
    }
    public function approveStoryNotification($genreId, $username)
    {
        // Tìm truyện theo genre_id
        $story = Book::where('genre_id', $genreId)->first();

        // Tìm người dùng theo username
        $user = User::where('username', $username)->first();

        // Kiểm tra nếu tồn tại cả truyện và người dùng, sau đó gửi thông báo
        if ($story && $user) {
            $user->notify(new StoryApprovalNotification($story));
            return redirect()->back()->with('success', 'Thông báo duyệt truyện đã được gửi.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy truyện hoặc người dùng.');
    }
}
