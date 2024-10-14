<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
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
    public function create()
    {
        $user = Auth::user();
        return view('user.nangcap', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
            'front_id_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'back_id_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'portrait_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'reason' => 'required|string',
        ]);

        $front_id_image = null;
        $back_id_image = null;
        $portrait_image = null;
        if ($request->hasFile('front_id_image')) {
            $front_id_image = $request->file('front_id_image')->store('images', 'public');
        }
        if ($request->hasFile('back_id_image')) {
            $back_id_image = $request->file('back_id_image')->store('images', 'public');
        }
        if ($request->hasFile('portrait_image')) {
            $portrait_image = $request->file('portrait_image')->store('images', 'public');
        }
        $cleaned_reason = strip_tags($request->input('reason'));
        Author::create([
            'user_id' => Auth::id(),
            'phone' => $request->phone,
            'front_id_image' => $front_id_image,
            'back_id_image' => $back_id_image,
            'portrait_image' => $portrait_image,
            'reason' => $cleaned_reason,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Yêu cầu đã được gửi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
