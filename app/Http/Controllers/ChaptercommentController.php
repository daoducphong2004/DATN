<?php

namespace App\Http\Controllers;

use App\Models\chaptercomment;
use App\Http\Requests\StorechaptercommentRequest;
use App\Http\Requests\UpdatechaptercommentRequest;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
    public function store(StorechaptercommentRequest $request)
    {
        $chapterComment = $this->getChapterCommentById(null);

        $this->setValueChapterComment($chapterComment, $request);

        $chapterComment->save();

        return null;
    }

    public function getChapterCommentById($id)
    {
        if (is_null($id)) {
            return new chaptercomment();
        } else {
            $chaptercomment = chaptercomment::find($id);

            if (is_null($chaptercomment)) {
                dd("Could not find chapter comment");
            }

            return $chaptercomment;
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chapterComment = $this->getChapterCommentById($id);
        $chapterComment->delete();
    }
}
