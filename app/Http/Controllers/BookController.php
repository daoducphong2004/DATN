<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\genre;
use Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= book::with('genres')->get();
        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = genre::pluck('id', 'name');
        return view('stories.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookRequest $request)
    {
        $slug = Str::slug($request->title, '-');
        $book = Book::create([
            'title' => $request->title,
            'adult' => $request->adult,
            'author' => $request->author,
            'painter' => $request->painter,
            'type' => $request->type,
            'group_id' => $request->group_id,
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP'=>0,
            'status' => $request->status,
            'slug' => $slug
        ]);

        $book->genres()->attach($request->input('genres'));
        return redirect()->route('story.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookRequest $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}
