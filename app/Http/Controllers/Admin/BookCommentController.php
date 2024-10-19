<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorebookcommentRequest;
use App\Http\Requests\UpdatebookcommentRequest;
use App\Models\book;
use App\Models\bookcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookCommentController extends Controller
{
    public function index()
    {
        $bookcomment = bookcomment::query()->orderBy('id', 'asc')->paginate(10);
        return view('admin.comments.list-bookComment', compact('bookcomment'));
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
    public function store(StorebookcommentRequest $request)
    {
        //
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
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!Auth::check() || Auth::user()->role->name !== 'mod' && Auth::user()->role->name !== 'admin') {
            return redirect()->route('bookComment.index')->with('error', 'Bạn không có quyền xóa bình luận!');
        }

        $bookComment = $this->getbookCommentById($id);
        $bookComment->delete();

        return back()->with('success, Bình luận đã được xoá ');
    }
}
