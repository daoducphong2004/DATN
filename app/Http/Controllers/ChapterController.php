<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Http\Requests\StorechapterRequest;
use App\Http\Requests\UpdatechapterRequest;
use App\Models\episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;

class ChapterController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'episode_id' => 'required|integer|exists:episodes,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'price' => 'required|numeric', // Thêm quy tắc xác thực cho price
        ]);

        // Add IDs to <p> tags
        $dom = new \DOMDocument();

        // Thiết lập mã hóa cho DOMDocument để xử lý UTF-8
        $dom->encoding = 'UTF-8';

        // Load HTML với encoding UTF-8
        @$dom->loadHTML(mb_convert_encoding($validatedData['content'], 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);

        $paragraphs = $dom->getElementsByTagName('p');

        // Thêm ID cho từng <p>
        foreach ($paragraphs as $index => $p) {
            $p->setAttribute('id', $index + 1);
        }

        // Lưu lại nội dung HTML với các ID đã thêm
        $contentWithIDs = $dom->saveHTML();
        // Calculate word count
        $wordCount = str_word_count(strip_tags($contentWithIDs));

        // Get the book associated with the episode
        $book = Episode::find($validatedData['episode_id'])->book()->first();

        // Check if the user has permission to edit the book
        if (!$this->canEditBook(Auth::user(), $book)) {
            return redirect()->back()->with('error', 'You do not have permission to edit this book.');
        }

        // Create new chapter
        $chapter = new Chapter();
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = '';
        $chapter->book_id = $book->id;
        $chapter->user_id = Auth::id();
        $chapter->content = $contentWithIDs;
        $chapter->price = $validatedData['price']; // Gán giá
        $chapter->word_count = $wordCount; // Lưu số từ
        $chapter->save();

        // Create slug from chapter_id and title
        $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        $chapter->slug = $slug;
        $lastOder = $chapter->getMaxOrderByBook($chapter->episode);
        $chapter->order = $lastOder + 1;
        // Save the chapter again with the updated slug
        $chapter->save();

        // Update the word count for the book (sum of all chapters)
        $book->word_count += $wordCount;
        $book->save();

        return redirect()->route('chapter.edit', $chapter->id)->with('success', 'Chapter added successfully.');
    }



    public function uploadImage(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/uploads', $imageName);

                // Return the URL of the uploaded image
                return response()->json([
                    'success' => true,
                    'url' => asset('storage/uploads/' . $imageName)
                ]);
            }

            return response()->json(['success' => false, 'message' => 'No file uploaded']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $chapter = chapter::findOrFail($id);

        return view('stories.iframe.chapters.formUpdateChapter', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $validatedData = $request->validate([
            'episode_id' => 'required|integer|exists:episodes,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'price' => 'required|numeric', // Thêm xác thực cho 'price'
        ]);

        // Tìm chapter cần cập nhật
        $chapter = Chapter::findOrFail($id);
        $book = Episode::findOrFail($validatedData['episode_id']);
        // Tính lại số từ mới
        $newWordCount = str_word_count(strip_tags($validatedData['content']));


        // Add IDs to <p> tags
        $dom = new \DOMDocument();

        // Thiết lập mã hóa cho DOMDocument để xử lý UTF-8
        $dom->encoding = 'UTF-8';

        // Load HTML với encoding UTF-8
        @$dom->loadHTML(mb_convert_encoding($validatedData['content'], 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);

        $paragraphs = $dom->getElementsByTagName('p');

        // Thêm ID cho từng <p>
        foreach ($paragraphs as $index => $p) {
            $p->setAttribute('id', $index + 1);
        }

        // Lưu lại nội dung HTML với các ID đã thêm
        $contentWithIDs = $dom->saveHTML();

        // Lấy thông tin về episode và book liên quan
        $book = $chapter->episode->book;

        // Cập nhật các thông tin của chapter
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        $chapter->book_id = $book->id;
        $chapter->content = $validatedData['content'];
        $chapter->price = $validatedData['price']; // Cập nhật giá của chapter
        $chapter->word_count = $newWordCount; // Cập nhật lại số từ mới

        // Xử lý cập nhật hình ảnh nếu có
        if ($request->hasFile('image')) {
            // Lưu hình ảnh và cập nhật đường dẫn
            $imagePath = $request->file('image')->store('images/chapters', 'public');
            $chapter->image = $imagePath;
        }

        $chapter->save();

        // Cập nhật lại số từ tổng cộng cho sách (book)
        // Trừ đi số từ cũ và thêm vào số từ mới
        $book->word_count = $book->word_count - $chapter->getOriginal('word_count') + $newWordCount;
        $book->save();

        return redirect()->route('chapter.edit', $chapter->id)->with('success', 'Chapter updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the chapter or fail if it doesn't exist
            $chapter = Chapter::findOrFail($id);

            // Detach the associated genres
            // $chapter->genres()->detach();

            // Get the book ID associated with the chapter
            // $bookId = $chapter->book_id;

            // Delete the chapter
            $chapter->delete();

            // Return a JSON response with success status
            return response()->json(['success' => true, 'message' => 'Chapter đã được xóa thành công!']);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Error deleting chapter: ' . $e->getMessage());

            // Return a JSON response with error status
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi xóa chapter. Vui lòng thử lại.']);
        }
    }

    //sắp xếp thứ tự chapter
    public function showChapters($episodeId)
    {
        // Lấy tất cả các chương của tập truyện cụ thể và sắp xếp theo 'order'
        $chapters = Chapter::where('episode_id', $episodeId)->orderBy('order')->get();
        return view('stories.iframe.chapters.sort', compact('chapters', 'episodeId'));
    }
    public function updateChapterOrder(Request $request, $episodeId)
    {
        $order = $request->input('order'); // Nhận thứ tự từ request

        foreach ($order as $position => $id) {
            Chapter::where('id', $id)
                ->where('episode_id', $episodeId) // Đảm bảo chỉ cập nhật các chương của tập truyện cụ thể
                ->update(['order' => $position + 1]);
        }

        return response()->json(['status' => 'success']);
    }
}
