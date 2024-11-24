<?php

namespace App\Http\Controllers;

use App\Models\chaptercomment;
use App\Http\Requests\StorechaptercommentRequest;
use App\Http\Requests\UpdatechaptercommentRequest;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChaptercommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapterComments = chaptercomment::with('children')->get();
        return null;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
        $chapterComment = new ChapterComment();
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
        } else {
            // Lấy tất cả bình luận của chapter, phân trang
            $chapterComments = ChapterComment::where('chapter_id', $id)
                ->with('user')  // Lấy thông tin người dùng của bình luận
                ->with('replies.user')  // Lấy các phản hồi và thông tin người dùng của phản hồi
                ->with('deletedBy')
                ->orderByDesc('created_at')  // Lấy thông tin người đã xóa nếu có
                ->paginate(5);  // Giới hạn 10 bình luận mỗi trang

            // Duyệt qua tất cả các bình luận và thay thế nội dung nếu bình luận bị xóa
            foreach ($chapterComments as $comment) {
                if ($comment->is_delete) {
                    // Nếu bình luận bị xóa, thay thế nội dung bằng thông báo
                    $comment->content = 'Bình luận bị xóa bởi: ' . $comment->deletedBy->username;
                }

                // Duyệt qua các phản hồi của bình luận và thay thế nội dung nếu phản hồi bị xóa
                foreach ($comment->replies as $reply) {
                    if ($reply->is_delete) {
                        // Nếu phản hồi bị xóa, thay thế nội dung bằng thông báo
                        $reply->content = 'Phản hồi bị xóa bởi: ' . $reply->deletedBy->username;
                    }
                }
            }
            if ($chapterComments->isEmpty()) {
                return response()->json([
                    'message' => 'Không tìm thấy bình luận.',
                    'data' => null
                ], Response::HTTP_OK); // Trả về mã lỗi 404 nếu không tìm thấy bình luận
            }

            // Trả về dữ liệu bình luận dưới dạng JSON
            return response()->json([
                'message' => 'Bình luận đã được tìm thấy.',
                'data' => $chapterComments,
            ], Response::HTTP_OK); // Trả về mã thành công 200
        }
    }


    public function hasPermission(int $userId)
    {
        $hasPermission = $userId == Auth::user()->id;
        if ($hasPermission) {
            dd(403, "you not has permission");
        }
    }

    public function setValueChapterComment(chaptercomment $chapterComment, StorechaptercommentRequest $request)
    {

        $chapterComment->content = $request->content;
        $chapterComment->user_id = Auth::user()->id;
        $chapterComment->chapter_id = $request->chapter_id;
        $chapterComment->parent_id = $request->parent_id;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chapterComment = $this->getChapterCommentById($id);
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chapterComment = $this->getChapterCommentById($id);
        $this->hasPermission($chapterComment->user_id);
        return null;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, StorechaptercommentRequest $request)
    {
        $chapterComment = $this->getChapterCommentById($id);
        $this->hasPermission($chapterComment->user_id);
        $this->setValueChapterComment($chapterComment, $request);

        $chapterComment->save();

        return null;
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
            $comment = ChapterComment::find($commentId);

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
    public function destroy($id)
    {
        $chapterComment = $this->getChapterCommentById($id);
        $chapterComment->delete();
    }
}
