<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\chapter;
use App\Models\genre;
use App\Models\group;
use Illuminate\Support\Facades\Storage;
use Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function listStories()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = book::query()->with('episodes.latestChapter')->paginate(30);
        return view('story.index', compact('data', 'genres', 'groups'));
    }

    public function reading(string $slug, string $chapterslug = null)
    {
        // Lấy book theo slug và load các episodes
        $book = Book::where('slug', $slug)->with('episodes.chapters')->firstOrFail();

        // Lấy chapter theo slug
        $chapter = Chapter::where('slug', $chapterslug)->firstOrFail();

        // dd($book,$chapter);
        // Trả về view với dữ liệu của book và chapter
        return view('story.reading', compact('book', 'chapter'));
    }
    public function index()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = book::query()->paginate(30);
        // dd($data);
        return view('stories.index', compact('data', 'genres', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = genre::pluck('id', 'name');
        $groups = group::pluck('id', 'name');
        return view('stories.create', compact('genres', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookRequest $request)
    {
        $slug = Str::slug($request->title, '-');
        $adult = $request->has('adult') ? 1 : 0;
        $book = Book::create([
            'type' => $request->type,
            'status' => $request->status,
            'like' => 0,
            'view' => 0,
            'slug' => $slug,
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'book_path' => '',
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => 0,
            // 'is_delete' => 0,
            'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
            'group_id' => $request->group_id,
        ]);

        // Handle image upload
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Lưu file vào thư mục storage/app/public/books
            $book->book_path = $path; // Chỉ lưu phần liên quan của đường dẫn vào cơ sở dữ liệu
            $book->save();
        }

        // Attach genres
        if ($request->input('genres')) {
            $book->genres()->attach($request->input('genres'));
        }
        return redirect()->route('story.show', $book->id);
    }

    /**
     * Display the specified resource.
     */
    //show admin
    public function show(String $id)
    {
        $book = Book::with('genres', 'episodes')->findOrFail($id);
        return view('stories.show', compact('book'));
    }
    //end show admin

    //show User
    public function showU(String $slug)
    {
        $book = Book::with('genres', 'episodes', 'group')->where(
            'slug',
            $slug
        )->firstOrFail();
        $episodes = $book->episodes;
        // dd($book,$episodes);
        return view('story.show', compact('book', 'episodes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $book = Book::with('genres', 'episodes')->findOrFail($id);
        // dd($book);

        return view('stories.edit', compact('book'));
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
    public function destroy(string $id)
    {
        try {
            // Find the book or fail if it doesn't exist
            $book = Book::findOrFail($id);

            // Detach the associated genres
            $book->genres()->detach();

            // Delete the book
            $book->delete();

            // Redirect to the story tree with a success message
            return redirect()->route('storytree')->with('success', 'Truyện đã được xóa thành công!');
        } catch (\Exception $e) {
            // Handle errors and redirect back with an error message
            return redirect()->route('storytree')->with('error', 'Có lỗi xảy ra khi xóa truyện. Vui lòng thử lại.');
        }
    }
}
