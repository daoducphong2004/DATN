<?php

namespace App\Http\Controllers;

use App\Models\SharedBook;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class SharedBookController extends Controller
{
    public function transferOwnership(Request $request, Book $book)
    {
        // Kiểm tra xem người dùng hiện tại có phải là chủ sở hữu không
        if ($request->user()->id !== $book->user_id) {
            return response()->json(['message' => 'phải là chủ sở hữu của quyển sách này'], 403);
        }

        // Xác định người dùng mới mà bạn muốn chuyển quyền sở hữu
        $newOwnerId = $request->input('new_owner_id');

        // Cập nhật quyền sở hữu
        $book->update(['user_id' => $newOwnerId]);

        // Xóa tất cả các quyền chia sẻ liên quan (nếu có)
        $book->sharedUsers()->detach();
        return response()->json(['message' => 'Book ownership transferred successfully']);
    }

    public function shareEditAccess(Request $request, Book $book)
    {
        // Xác định email của người dùng được chia sẻ quyền chỉnh sửa
        $sharedUserEmail = $request->input('user_email');
        // Lấy ID của người dùng hiện tại (người đăng nhập)
        $currentUserId = $request->user()->id;

        // Kiểm tra nếu người dùng hiện tại là chủ sở hữu của truyện
        if ($book->user_id != $currentUserId) {
            return redirect()->back()->with('error', 'Chỉ chủ sở hữu của truyện mới có quyền chia sẻ quyền chỉnh sửa.');
        }

        // Tìm người dùng theo email
        $sharedUser = User::where('email', $sharedUserEmail)->first();

        if (!$sharedUser) {
            return redirect()->back()->with('error', 'Người dùng không tồn tại với email đã cho.');
        }

        // Kiểm tra nếu người dùng hiện tại là chủ sở hữu của truyện
        if ($book->user_id == $sharedUser->id) {
            return redirect()->back()->with('error', 'Bạn không thể chia sẻ quyền chỉnh sửa cho chính mình.');
        }

        // Kiểm tra nếu người dùng đã có quyền chỉnh sửa
        if (SharedBook::where('user_id', $sharedUser->id)->where('book_id', $book->id)->exists()) {
            return redirect()->back()->with('error', 'Người dùng này đã có quyền chỉnh sửa.');
        }

        // Chia sẻ quyền chỉnh sửa
        SharedBook::create([
            'user_id' => $sharedUser->id,
            'book_id' => $book->id,
        ]);

        return redirect()->back()->with('success', 'Quyền chỉnh sửa đã được chia sẻ thành công.');
    }


    /**
     * Thu hồi quyền chỉnh sửa từ một người dùng cho một truyện.
     */
    public function revokeEditAccess(Request $request, Book $book)
    {
        // Xác định người dùng cần thu hồi quyền chỉnh sửa
        $sharedUserId = $request->input('user_id');
        // Kiểm tra nếu người dùng hiện tại là chủ sở hữu của truyện
        if ($request->user()->id !== $book->user_id) {
            return redirect()->back()->with('error', 'Bạn không có quyền thu hồi quyền chỉnh sửa từ truyện này.');
        }
        // Kiểm tra nếu người dùng đã có quyền chỉnh sửa
        $sharedBook = SharedBook::where('user_id', $sharedUserId)->where('book_id', $book->id)->first();
        if (!$sharedBook) {
            return redirect()->back()->with('error', 'Người dùng này không có quyền chỉnh sửa truyện này.');
        }
        // Thu hồi quyền chỉnh sửa
        $sharedBook->delete();
        return redirect()->back()->with('success', 'Quyền chỉnh sửa đã được thu hồi thành công.');
    }
    /**
     * Lấy danh sách người dùng được chia sẻ quyền chỉnh sửa truyện.
     */
    /**
     * Lấy danh sách người dùng được chia sẻ quyền chỉnh sửa truyện.
     */
    public function listSharedUsers(Book $book)
    {
        // $book = Book::with('sharedUsers.user')->find($bookId);

    if (!$book) {
        return redirect()->back()->with('error', 'Sách không tồn tại.');
    }

    return view('stories.iframe.sharebooks.list', compact('book'));
    }

    function bookFavorite(){

    }
}
