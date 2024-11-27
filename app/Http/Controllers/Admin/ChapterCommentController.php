<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChapterComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapterCommentController extends Controller
{
    public function index()
    {
        // Lấy tất cả bình luận
        $comments = ChapterComment::with(['chapter', 'user', 'deletedBy'])->paginate(10);
        return view('admin.comments.list-comment', compact('comments'));
    }

    public function show($id)
    {
        // Hiển thị chi tiết bình luận
        $comment = ChapterComment::with(['chapter', 'user', 'parent', 'replies'])->findOrFail($id);
        return view('admin.comments.showchaptercomment', compact('comment'));
    }

    public function delete($id)
    {
        // Xóa bình luận (có thể là soft delete)
        $comment = ChapterComment::findOrFail($id);
        $comment->is_delete = auth()->id(); // Đánh dấu người xóa
        $comment->save();
        return redirect()->route('admin.chaptercomments.index')->with('success', 'Bình luận đã bị xóa');
    }

    public function restore($id)
    {
        // Khôi phục bình luận bị xóa
        $comment = ChapterComment::findOrFail($id);
        $comment->is_delete = null; // Xóa đánh dấu xóa
        $comment->save();
        return redirect()->route('admin.chaptercomments.index')->with('success', 'Bình luận đã được khôi phục');
    }

    public function destroy($id)
    {
        // Xóa vĩnh viễn bình luận
        $comment = ChapterComment::findOrFail($id);
        $comment->delete();
        return redirect()->route('admin.chaptercomments.index')->with('success', 'Bình luận đã bị xóa vĩnh viễn');
    }
}
