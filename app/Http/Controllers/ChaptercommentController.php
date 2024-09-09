<?php

namespace App\Http\Controllers;

use App\Models\chaptercomment;
use App\Http\Requests\StorechaptercommentRequest;
use App\Http\Requests\UpdatechaptercommentRequest;
use App\Models\chapter;
use Illuminate\Http\Request;

class ChaptercommentController extends Controller
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
    public function create(Request $request, $slug, $chapter_slug)
    {

        $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:chapter_comments,id'
        ]);

        chaptercomment::create([
            'chapter_id' => $request->chapter_id,
            // 'user_id' => auth()->id(),
            'user_id' => 1,
            'content' => $request->input('content'),
            'parent_id' => $request->input('parent_id')
        ]);

        return back()->with('success', 'Bình luận đã được gửi.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorechaptercommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(chaptercomment $chaptercomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chaptercomment $chaptercomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatechaptercommentRequest $request, chaptercomment $chaptercomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chaptercomment $chaptercomment)
    {
        //
    }
}
