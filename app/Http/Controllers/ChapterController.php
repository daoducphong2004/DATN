<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Http\Requests\StorechapterRequest;
use App\Http\Requests\UpdatechapterRequest;
use App\Models\episode;
use Illuminate\Http\Request;
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
        ]);
        $book = episode::find($request->episode_id)->book()->first();
        // Tạo mới chapter
         $chapter = new Chapter();
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = '';
        // $chapter->image = $imagePath;
        $chapter->content = $validatedData['content'];
        $chapter->save();

        // Tạo slug từ chapter_id và tiêu đề
        $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        $chapter->slug = $slug;

        // Lưu lại chapter với slug mới
        $chapter->save();

        // Trigger sẽ tự động cập nhật trường 'updated_at' trong bảng 'book'

        return redirect()->route('chapter.edit',$chapter->id)->with('success', 'Chapter added successfully.');
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

        return view('stories.iframe.chapters.formUpdateChapter',compact('chapter'));

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
        ]);

        // Tìm chapter cần cập nhật
        $chapter = Chapter::findOrFail($id);
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        // $chapter->image = $imagePath;
        $chapter->content = $validatedData['content'];
        $chapter->save();

        // Trigger sẽ tự động cập nhật trường 'updated_at' trong bảng 'book'

        return redirect()->route('chapter.edit',$chapter->id)->with('success', 'Chapter updated successfully.');
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
}
