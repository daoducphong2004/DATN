<?php

namespace App\Http\Controllers;

use App\Models\chaptercomment;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChaptercommentController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'content' => 'required|string',
            'chapter_id' => 'required|exists:chapters,id',
            'parent_id' => 'nullable|exists:chapter_comments,id',
        ]);

        // Tạo mới comment
        $chapterComment = new chaptercomment();
        $chapterComment->content = $validatedData['content'];
        $chapterComment->chapter_id = $validatedData['chapter_id'];
        $chapterComment->parent_id = $validatedData['parent_id'];
        $chapterComment->user_id = Auth::id(); // Lấy user hiện tại
        $chapterComment->save();

        // Trả về response (có thể là HTML để render)

        return response()->json([
            'status' => 'success',
        ]);
    }



    public function getChapterCommentById($id, $page = 1)
    {
        if (is_null($id)) {
            return response()->json([
                'message' => 'ID không hợp lệ.',
                'data' => null
            ], Response::HTTP_BAD_REQUEST); // Trả về mã lỗi 400 nếu ID không hợp lệ
        }

        // Lấy tất cả bình luận của chapter (top-level comments)
        $chapterComments = chaptercomment::where('chapter_id', $id)
            ->whereNull('parent_id') // Chỉ lấy bình luận gốc
            ->with(['user', 'replies.user', 'deletedBy', 'replies.deletedBy']) // Lấy thông tin người dùng và thông tin xóa
            ->orderByDesc('created_at') // Sắp xếp giảm dần theo thời gian
            ->paginate(5); // Phân trang, mỗi trang 5 bình luận

        if ($chapterComments->isEmpty()) {
            return response()->json([
                'message' => 'Không tìm thấy bình luận.',
                'data' => null
            ], Response::HTTP_OK); // Trả về mã thành công 200 nếu không có bình luận
        }

        // Xử lý nội dung của bình luận
        $chapterComments->getCollection()->transform(function ($comment) {
            return $this->processComment($comment);
        });

        // Trả về dữ liệu bình luận dưới dạng JSON
        return response()->json([
            'message' => 'Bình luận đã được tìm thấy.',
            'data' => $chapterComments,
        ], Response::HTTP_OK); // Trả về mã thành công 200
    }

    /**
     * Xử lý nội dung của một bình luận, bao gồm cả các phản hồi.
     */
    private function processComment($comment)
    {
        if ($comment->is_delete) {
            // Thay thế nội dung nếu bình luận bị xóa
            $comment->content = 'Bình luận bị xóa bởi: ' . optional($comment->deletedBy)->username;
        }

        // Xử lý các phản hồi
        $comment->replies = $comment->replies->map(function ($reply) {
            if ($reply->is_delete) {
                // Thay thế nội dung nếu phản hồi bị xóa
                $reply->content = 'Phản hồi bị xóa bởi: ' . optional($reply->deletedBy)->username;
            }
            return $reply;
        });

        return $comment;
    }


    /**
     * Xóa bình luận bằng cách cập nhật trường is_delete với user_id.
     *
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function deleteComment($commentId)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            // Lấy user_id từ Auth
            $userId = Auth::id();

            // Tìm bình luận theo ID
            $comment = chaptercomment::find($commentId);

            // Kiểm tra nếu bình luận tồn tại
            if ($comment) {
                // Cập nhật trường is_delete với user_id của người dùng
                $comment->update([
                    'is_delete' => $userId,
                ]);
                $comment->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Bình luận đã được xóa thành công.',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy bình luận.'
                ], 404);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Bạn cần đăng nhập để xóa bình luận.'
            ], 401);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
}
