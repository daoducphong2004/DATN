<?php

namespace App\Http\Controllers;

use App\Models\bookcomment;
use App\Http\Requests\StorebookcommentRequest;
use App\Http\Requests\UpdatebookcommentRequest;
use Illuminate\Http\Request;

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
        $request->validate([
            'comment' => 'required',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        bookcomment::create([
            'book_id' => $book_id,
            'user_id' => auth()->id(),
            'comment' => $request->input('comment'),
            'parent_id' => $request->input('parent_id') // Nếu đây là phản hồi, parent_id sẽ không null
        ]);

        return back();
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bookcomment $bookcomment)
    {
        //
    }
}
