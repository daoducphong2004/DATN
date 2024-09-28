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
    public function createEpisode($book_id)
    {
        $users = User::all(); // Assuming you have a User model

        return view('admin.stories.episodes.create', compact('book_id', 'users'));
    }

    public function createChapter($episode_id)
    {
        // Lấy thông tin tập truyện (episode) theo episode_id
        $episode = Episode::findOrFail($episode_id);

        // Lấy danh sách người dùng (user) để chọn người đăng
        $users = User::all();

        // Trả về view thêm chương với tập truyện đã chọn
        return view('admin.stories.chapter.create', compact('episode', 'users'));
    }

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
        // dd($request->all());
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
        return redirect()->route('admin_storylist')->with('success', 'Book created successfully');
    }
    public function storeEpisode(Request $request)
    {

        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'episode_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn ảnh là 2MB
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Lưu file ảnh episode
        if ($request->hasFile('episode_path')) {
            $file = $request->file('episode_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('episodes', $fileName, 'public'); // Lưu trong thư mục 'storage/app/public/episodes'
            $validatedData['episode_path'] = $filePath;
        }

        // Tạo mới episode với dữ liệu đã validate
        $episode = Episode::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'episode_path' => $validatedData['episode_path'],
            'slug' => $validatedData['title'],
            'book_id' => $validatedData['book_id'],
            'user_id' => $validatedData['user_id'],
        ]);

        // Tạo slug bằng cách sử dụng ID của episode vừa tạo và tiêu đề
        $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
        $episode->slug = $slug;

        // Lưu lại slug vào episode
        $episode->save();

        return redirect()->route('admin_storylist')->with('success', 'Episode đã được thêm thành công.');
    }
    public function storeChapter(Request $request)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'episode_id' => 'required|exists:episodes,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $book = episode::find($request->episode_id)->book()->first();
        // Tạo mới chapter
        $chapter =  Chapter::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'slug' => $validatedData['title'],
            'episode_id' => $validatedData['episode_id'],
            'user_id' => $validatedData['user_id'],
        ]);
        // Tạo slug từ chapter_id và tiêu đề
        $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        $chapter->slug = $slug;

        // Lưu lại chapter với slug mới
        $chapter->save();
        // Điều hướng về trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $book->id])
            ->with('success', 'Chương đã được thêm thành công.');
    }



    //Edit
    public function editBook(String $id)
    {
        $book = Book::findOrFail($id);
        return view('admin.stories.editStory', compact('book'));
    }

    public function editEpisode($id)
    {
        $episode = Episode::findOrFail($id); // Tìm tập theo id
        $users = User::all(); // Danh sách người dùng

        return view('admin.stories.episodes.edit', compact('episode', 'users'));
    }
    public function editChapter($id)
    {
        $chapter = Chapter::findOrFail($id); // Lấy chương theo id
        $users = User::all(); // Lấy danh sách người dùng để chọn người đăng

        return view('admin.stories.chapter.edit', compact('chapter', 'users'));
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

    public function updateEpisode(Request $request, $id)
    {
        $episode = Episode::findOrFail($id);

        // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'episode_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn ảnh là 2MB
            'user_id' => 'required|exists:users,id',
        ]);

        // Xử lý upload file ảnh mới (nếu có)
        if ($request->hasFile('episode_path')) {
            // Xóa ảnh cũ nếu có
            if ($episode->episode_path) {
                Storage::disk('public')->delete($episode->episode_path);
            }

            $file = $request->file('episode_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('episodes', $fileName, 'public');
            $validatedData['episode_path'] = $filePath;
        }

        // Cập nhật episode với dữ liệu đã validate
        $episode->update($validatedData);

        // Tạo lại slug nếu cần
        $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
        $episode->slug = $slug;

        $episode->save();

        return redirect()->route('admin_storyshow', $episode->book_id)->with('success', 'Episode đã được cập nhật thành công.');
    }

    public function updateChapter(Request $request, $id)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'episode_id' => 'required|exists:episodes,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Lấy chương cần cập nhật
        $chapter = Chapter::findOrFail($id);

        // Tạo slug mới nếu tiêu đề thay đổi
        $slug = Str::slug($validatedData['title']);

        // Cập nhật dữ liệu của chương
        $chapter->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'slug' => $slug,
            'episode_id' => $validatedData['episode_id'],
            'user_id' => $validatedData['user_id'],
        ]);
        $episode = episode::findOrFail($request->episode_id);
        // Điều hướng về trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $episode->book_id])
            ->with('success', 'Chương đã được cập nhật thành công.');
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
    public function destroyEpisode($id)
    {
        // Tìm tập theo id
        $episode = Episode::findOrFail($id);

        // Xóa file ảnh của tập nếu có
        if ($episode->episode_path) {
            Storage::disk('public')->delete($episode->episode_path);
        }

        // Xóa tập
        $episode->delete();

        // Chuyển hướng về trang danh sách truyện hoặc trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $episode->book_id])
            ->with('success', 'Tập đã được xóa thành công.');
    }
        // Xử lý xóa chương
        public function destroyChapter($id)
        {
            // Tìm chương theo id
            $chapter = Chapter::findOrFail($id);

            // Xóa chương
            $chapter->delete();

            // Điều hướng về trang chi tiết tập truyện hoặc danh sách tập
            return redirect()->back()->with('success', 'Chương đã được xóa thành công.');
        }
}
