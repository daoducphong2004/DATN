<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\bookcomment;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = book::query()->where('Is_Inspect', "Đã Duyệt")->paginate(30);
        return view('story.index', compact('data', 'genres', 'groups'));
    }

    public function bookComment($bookId)
    {
        $comments = bookcomment::with('user')
            ->where('book_id', $bookId)
            ->whereNull('parent_id')
            ->with('replies.replies')->get();

        $book = book::findOrFail($bookId);

        return view('story.show', compact('comments', 'book'));
    }

    public function reading(string $slug, string $chapter_slug, Request $request)
    {
        // Tìm kiếm book dựa trên slug
        $book = book::where('slug', $slug)->where('Is_Inspect', "Đã Duyệt")->with('episodes')->firstOrFail();

        // Tăng giá trị của trường `view_count` hoặc tên trường mà bạn muốn cộng thêm 1
        $book->increment('view');

        // Tìm kiếm chapter dựa trên chapter_slug
        $chapter = chapter::where('slug', $chapter_slug)->firstOrFail();

        // Lấy episode liên quan đến chapter
        $episode = $chapter->episode()->with('chapters')->firstOrFail();

        // Lấy danh sách các chapters trong episode của chapter hiện tại
        $chapters = $episode->chapters;
        // Tăng giá trị của trường `view_count` hoặc tên trường mà bạn muốn cộng thêm 1
        $book->increment('view');
        // Lấy danh sách comments cho chapter này
        $comments = chaptercomment::with('user')
            ->where('chapter_id', $chapter->id)
            ->whereNull('parent_id')->get();

        $parentId = $request->input('parent_id');

        return view('story.reading', compact('book', 'episode', 'chapters', 'chapter', 'comments', 'parentId'));
    }
    public function index()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = book::query()->where('Is_Inspect', "Đã Duyệt")->paginate(30);
        // dd($data);u
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
        $adult = $request->has('adult') ? 1 : 0;
        $book = Book::create([
            'type' => $request->type,
            'status' => $request->status,
            'like' => 0,
            'view' => 0,
            'slug' => '',
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'book_path' => '',
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => 0,
            'price' => $request->price,
            'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
            'group_id' => $request->group_id,
            'user_id' => Auth::id(),
        ]);

        $slug = Str::slug('b'.$book->id . '-' . $request->title);
        $book->slug = $slug;
        $book->save();
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

        $comments = bookcomment::with('user')
            ->where('book_id', $book->id)
            ->whereNull('parent_id')
            ->with('replies.replies')->get();


        // dd($comments);
        if (Auth::check() && Auth::user()->role->name === 'guest' && $book->is_paid) {
            return redirect()->route('home')->with('error', 'Bạn không có quyền đọc truyện này. Hãy nâng cấp tài khoản');
        }

        return view('story.show', compact('book', 'episodes', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $book = Book::with('genres', 'episodes')->findOrFail($id);
        $genres = genre::pluck('id', 'name');
        return view('stories.iframe.information', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookRequest $request, string $id)
    {
        $book = Book::findOrFail($id);
        $adult = $request->has('adult') ? 1 : 0;

        // Update book information
        $slug = Str::slug($book->id . '-' . $request->title);
        $book_path = $book->book_path; // Giữ nguyên ảnh cũ

        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = Storage::put('public/books', $image); // Using Storage::put to store the image
            $book_path = str_replace('public/', '', $path); // Save relative path to the database
        }

        $book->update([
            'type' => $request->type,
            'status' => $request->status,
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => 0,
            'book_path' => $book_path,
            'slug' => $slug,
            'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
            'group_id' => $request->group_id,
            'user_id' => Auth::id(),
        ]);

        // Attach genres
        if ($request->input('genres')) {
            $book->genres()->sync($request->input('genres')); // Use sync to update genres
        }

        return redirect()->route('storyinformation', $book->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $book = Book::findOrFail($id);
            $book->genres()->detach();
            $book->delete();
            return response()->json(['success' => 'Truyện đã được xóa thành công!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Có lỗi xảy ra khi xóa truyện. Vui lòng thử lại.'], 500);
        }
    }
}
