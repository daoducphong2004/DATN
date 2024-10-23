<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookApprovalController extends Controller
{
    // Hiển thị danh sách các truyện chưa duyệt
    public function index()
    {
        $books = Book::where('Is_Inspect', 0)->get(); // Chỉ lấy các truyện chưa duyệt
        return view('admin.books.approval', compact('books'));
    }

    // Duyệt hoặc từ chối truyện
    public function approve(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        // Cập nhật trạng thái Is_Inspect (1: Đã duyệt, 0: Từ chối)
        $book->Is_Inspect = $request->input('approve') ? 1 : 0;
        $book->save();

        return redirect()->back()->with('success', 'Trạng thái truyện đã được cập nhật.');
    }
}
