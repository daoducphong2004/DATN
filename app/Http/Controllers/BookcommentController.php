<?php

namespace App\Http\Controllers;

use App\Models\bookcomment;
use App\Http\Requests\StorebookcommentRequest;
use App\Http\Requests\UpdatebookcommentRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookcommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $book_id)
    {
        // dd($request->all());
        $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:book_comments,id'
        ]);
        $comment = bookcomment::create([
            'book_id' => $book_id,
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
            'parent_id' => $request->input('parent_id')
        ]);

        $book = Book::findOrFail($book_id);
        $authorId = $book->user_id;

        if ($authorId !== Auth::id()) {
            $author = User::find($authorId);

            if ($author) {
                $author->notifications()->create([
                    'type' => 'App\Notifications\NewBookCommentNotification',
                    'notifiable_id' => $authorId,
                    'notifiable_type' => 'App\Models\User',
                    'data' => [
                        'message' => '<strong>' . Auth::user()->username . '</strong> đã bình luận truyện <strong>' . $book->title . '</strong> của bạn',
                        'slug' => $book->slug,

                    ],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return back()->with('success', 'Comment added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookcommentRequest $request, $book_id)
    {
        // // dd($request->all());
        // $request->validate([
        //     'content' => 'required',
        //     'parent_id' => 'nullable|exists:book_comments,id'
        // ]);

        // bookcomment::create([
        //     'book_id' => $book_id,
        //     'user_id' => auth()->id(),
        //     //  'user_id' => 1,
        //     'content' => $request->input('content'),
        //     'parent_id' => $request->input('parent_id')
        // ]);

        // return back()->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(bookcomment $bookcomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bookcomment $bookcomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookcommentRequest $request, bookcomment $bookcomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function getbookCommentById($id)
    {
        if (is_null($id)) {
            return new bookcomment();
        } else {
            $bookcomment = bookcomment::find($id);

            if (is_null($bookcomment)) {
                dd("Could not find book comment");
            }

            return $bookcomment;
        }
    }

    protected function getAllComments($parentId)
    {
        $allComments = [];
        $parent = [$parentId];

        while (!empty($parent)) {
            $currentId = array_shift($parent); // Lấy phần tử đầu tiên trong hàng đợi
            $allComments[] = $currentId;

            // Lấy tất cả bình luận con của bình luận hiện tại
            $childComments = bookcomment::where('parent_id', $currentId)->pluck('id')->toArray();
            $parent = array_merge($parent, $childComments);
        }

        return $allComments;
    }
    public function destroy($id)
    {
        $bookComment = $this->getbookCommentById($id);

        if (auth()->id() !== $bookComment->user_id && !in_array(auth()->user()->role->name, ['mod', 'admin', 'super_admin'])) {
            return redirect()->back()->with('error', 'Bạn không có quyền xóa bình luận này.');
        }

        $allComments = $this->getAllComments($bookComment->id);

        bookcomment::whereIn('id', $allComments)->update(['is_deleted' => true]);


        return redirect()->back()->with('success', 'Bình luận đã được xóa.');
    }
}
