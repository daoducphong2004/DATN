<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\chapter;
use App\Models\episode;
use App\Models\genre;
use App\Models\group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;

class StoryController extends Controller
{
    public function index()
    {
        // lấy book
        $stories = book::query()->with('user', 'groups')->paginate(10);
        // dd($storys);
        return view('admin.stories.list-story', compact('stories'));
    }
    //Create
    public function createBook()
    {
        $genres = genre::pluck('id', 'name');
        $groups = group::pluck('id', 'name');
        $users = User::all();
        return view('admin.stories.create', compact('genres', 'groups', 'users'));
    }
    public function createEpisode(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'book_id' => 'required|integer|exists:books,id',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'episode_path' => 'required|file|mimes:png,jpg,jpeg,gif|max:2048', // Accept only specific image types and max 2MB
            ]);

            // Handle file upload
            if ($request->hasFile('episode_path')) {
                $file = $request->file('episode_path');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/episodes', $filename);

                // Store episode data in the database
                $episode = new Episode();
                $episode->book_id = $validatedData['book_id'];
                $episode->title = $validatedData['title'];
                $episode->slug = ''; // Store the generated slug
                $episode->description = $validatedData['description'];
                $episode->episode_path = $filePath;
                $episode->user_id = Auth::id();
                $episode->save();

                // Generate and save slug
                $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
                $episode->slug = $slug;
                $episode->save();
            }

            // Flash a success message to the session
            session()->flash('success', 'Thêm tập mới thành công!');

            return redirect()->back()->with('episode', $episode);
        } catch (\Exception $e) {
            // Flash an error message to the session
            session()->flash('error', 'Đã xảy ra lỗi khi tạo tập mới: ' . $e->getMessage());

            return redirect()->back();
        }
    }

    public function createChapter() {}

    //Show
    public function showBook(String $id)
    {
        $book = Book::with('genres', 'episodes', 'group')->findOrFail($id);
        $episodes = $book->episodes;

        return View('admin.stories.showStory', compact('book', 'episodes'));
    }
    public function showEpisode(String $id)
    {
        $episode = episode::with('chapters')->findOrFail($id);
        // dd($episode);
        return view('admin.stories.showEpisode', compact('book', 'episode'));
    }
    public function showChapter(String $id)
    {
        $chapter = chapter::findOrFail($id);
        return view('admin.stories.showChapter', compact('chapter'));
    }

    //Store
    public function storeBook(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'type' => 'required|integer',
            'status' => 'required|integer',
            'group_id' => 'required|integer',
            'user_id' => 'required|integer',
            'book_path' => 'nullable|image|max:2048', // Validate image upload
            'like' => 'required|integer|min:0',
            'view' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'note' => 'nullable|string',
        ]);

        // Process input data
        $adult = $request->has('adult') ? 1 : 0;

        // Create a new book entry
        $book = Book::create([
            'type' => $request->type,
            'status' => $request->status,
            'like' => $request->like,
            'view' => $request->view,
            'slug' => '',  // Temporary slug
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'book_path' => '',  // To be updated later
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => $request->is_vip ?? 0,  // Default to 0 if not set
            'adult' => $adult,  // 0 or 1
            'group_id' => $request->group_id,
            'user_id' => $request->user_id,
        ]);

        // Generate slug and update the book
        $slug = Str::slug($book->id . '-' . $request->title);

        // Update the slug field
        $book->slug = $slug;
        $book->save();  // Save the book with the new slug

        // Handle image upload if provided
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Save to storage/app/public/books
            $book->update(['book_path' => $path]); // Save the relative path to DB
        }

        // Attach genres if any
        if ($request->input('genres')) {
            $book->genres()->attach($request->input('genres'));
        }

        // Redirect to story view
        return redirect()->route('story.show', $book->id)->with('success', 'Book created successfully');
    }
    public function storeEpisode() {}



    //Edit
    public function editBook(String $id)
    {
        $book = Book::findOrFail($id);
        return view('admin.stories.editStory', compact('book'));
    }





    //update
    public function updateBook(Request $request, $id)
{
    // Tìm cuốn sách dựa vào ID
    $book = Book::find($id);

    // Kiểm tra nếu cuốn sách không tồn tại
    if (!$book) {
        return redirect()->back()->with('error', 'Cuốn sách không tồn tại.');
    }

    // Validate các trường đầu vào
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'painter' => 'nullable|string|max:255',
        'view' => 'required|integer',
        'like' => 'required|integer',
        'type' => 'required|string|max:255',
        'description' => 'nullable|string',
        'note' => 'nullable|string',
        'status' => 'required|boolean',
        'is_VIP' => 'required|boolean',
        'adult' => 'required|boolean',
        'Is_Inspect' => 'nullable|string|max:255',
        'user_id' => 'required|integer|exists:users,id',
        'group_id' => 'nullable|integer',
        'book_path' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn file ảnh
    ]);

        // Handle image upload if provided
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Save to storage/app/public/books
            $book->update(['book_path' => $path]); // Save the relative path to DB
        }
    // Cập nhật các trường khác
    $book->update([
        'title' => $request->title,
        'slug' => $request->slug,
        'author' => $request->author,
        'painter' => $request->painter,
        'view' => $request->view,
        'like' => $request->like,
        'type' => $request->type,
        'description' => $request->description,
        'note' => $request->note,
        'status' => $request->status,
        'is_VIP' => $request->is_VIP,
        'adult' => $request->adult,
        'is_delete' => $request->is_delete,
        'Is_Inspect' => $request->Is_Inspect,
        'user_id' => $request->user_id,
        'group_id' => $request->group_id,
    ]);

    // Điều hướng người dùng trở lại với thông báo thành công
    return redirect()->route('admin_storylist')->with('success', 'Cập nhật sách thành công.');
}

    //Destroy
    public function destroyBook($id)
    {
        try {
            // Tìm cuốn sách theo ID
            $book = Book::findOrFail($id);

            // Xóa cuốn sách (sử dụng Soft Delete nếu có)
            $book->delete();

            // Điều hướng về trang danh sách với thông báo thành công
            return redirect()->route('admin.books.index')->with('success', 'Sách đã được xóa thành công.');

        } catch (\Exception $e) {
            // Xử lý lỗi nếu có
            return redirect()->route('admin_storylist')->with('error', 'Có lỗi xảy ra khi xóa sách: ' . $e->getMessage());
        }
    }

}
