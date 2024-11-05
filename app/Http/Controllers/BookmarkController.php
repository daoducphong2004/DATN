<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user->load('bookmarks');
        $bookmarks = $user->bookmarks;
        // dd($bookmarks);
        return view('home.bookmark', compact('user','bookmarks'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|integer|exists:books,id',
            'chapter_id' => 'required|integer|exists:chapters,id',
            'line_id' => 'required|integer',
        ]);

        // Check if bookmark already exists for this user
        $existingBookmark = Bookmarks::where([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'chapter_id' => $request->chapter_id,
            'line_id' => $request->line_id,
        ])->first();

        if ($existingBookmark) {
            return response()->json(['status' => 'exists', 'message' => 'Bookmark đã tồn tại']);
        }

        $bookmark = Bookmarks::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'chapter_id' => $request->chapter_id,
            'line_id' => $request->line_id,
        ]);

        return response()->json(['status' => 'success', 'bookmark_id' => $bookmark->id, 'line_id' => $bookmark->line_id]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'line_id' => 'required|integer',
            'chapter_id' => 'required|integer|exists:chapters,id',
        ]);

        $bookmark = Bookmarks::findOrFail($id);
        $bookmark->update([
            'line_id' => $request->line_id,
            'chapter_id' => $request->chapter_id,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Bookmark updated successfully']);
    }

    public function destroy($id)
    {
        $bookmark = Bookmarks::findOrFail($id);
        $bookmark->delete();

        return response()->json(['status' => 'success', 'message' => 'Xóa Bookmark thành công']);
    }
    public function getUserBookmarks($chapter)
    {

        $userId = Auth::id(); // Lấy ID của người dùng hiện tại

        // Lấy danh sách bookmark của người dùng trong chapter cụ thể
        $bookmarks = Bookmarks::where('user_id', $userId)
            ->where('chapter_id', $chapter)
            ->get();
        // dd($bookmarks);
        // Trả về danh sách bookmark dưới dạng JSON
        return response()->json([
            'status' => 'success',
            'bookmarks' => $bookmarks
        ]);
    }
}
