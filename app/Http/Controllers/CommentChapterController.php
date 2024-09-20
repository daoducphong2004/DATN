<?php

namespace App\Http\Controllers;

use App\Models\chaptercomment;
use App\Http\Requests\StorechaptercommentRequest;
use App\Http\Requests\UpdatechaptercommentRequest;
use App\Models\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentChapterController extends Controller
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
    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:chapter_comments,id'
        ]);

        chaptercomment::create([
            'chapter_id' => $request->chapter_id,
            // 'user_id' => auth()->id(),
            'user_id' => 1,
            'content' => strip_tags($request->input('content')),
            'parent_id' => $request->parent_id,
        ]);

        return back()->with('success', 'Bình luận đã được gửi.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorechaptercommentRequest $request)
    {

    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, StorechaptercommentRequest $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}

