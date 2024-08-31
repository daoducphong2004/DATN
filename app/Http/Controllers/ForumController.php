<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Requests\StoreForumRequest;
use App\Http\Requests\UpdateForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Forum::query()->join('users', 'users.id', '=', 'forums.user_id')->get(['users.username as username', 'forums.id as id', 'forums.content as content', 'forums.created_at as created_at']);
        return view('/admin/comments/list-comment', compact('data'));
    }
    public function indexviewer()
    {
        $data = Forum::query()->join('users', 'users.id', '=', 'forums.user_id')->get(['users.username as username', 'forums.id as id', 'forums.content as content', 'forums.created_at as created_at']);
        return view('home.index',compact('data'));
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
    public function store(StoreForumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
