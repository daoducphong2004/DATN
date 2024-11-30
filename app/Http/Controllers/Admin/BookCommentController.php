<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorebookcommentRequest;
use App\Http\Requests\UpdatebookcommentRequest;
use App\Models\Book;
use App\Models\bookcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookCommentController extends Controller
{
   public function index()
    {
        // Lấy tất cả bình luận
        $comments = bookcomment::with(['book', 'user', 'deletedBy'])->paginate(10);
        // dd($comments);
        return view('admin.comments.list-bookComment', compact('comments'));
    }

    public function show($id)
    {
        // Hiển thị chi tiết bình luận
        $comment = bookcomment::with(['chapter', 'user', 'parent', 'replies'])->findOrFail($id);
        return view('admin.comments.showchaptercomment', compact('comment'));
    }

    public function delete($id)
    {
        // Xóa bình luận (có thể là soft delete)
        $comment = bookcomment::findOrFail($id);
        $comment->is_deleted = auth()->id(); // Đánh dấu người xóa
        $comment->save();
        return redirect()->route('admin.bookcomments.index')->with('success', 'Bình luận đã bị xóa');
    }

    public function restore($id)
    {
        // Khôi phục bình luận bị xóa
        $comment = bookcomment::findOrFail($id);
        $comment->is_deleted = 0; // Xóa đánh dấu xóa
        $comment->save();
        return redirect()->route('admin.bookcomments.index')->with('success', 'Bình luận đã được khôi phục');
    }

    public function destroy($id)
    {
        // Xóa vĩnh viễn bình luận
        $comment = bookcomment::findOrFail($id);
        $comment->delete();
        return redirect()->route('admin.bookcomments.index')->with('success', 'Bình luận đã bị xóa vĩnh viễn');
    }
}
