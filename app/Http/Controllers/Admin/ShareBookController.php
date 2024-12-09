<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\SharedBook;
use Illuminate\Http\Request;

class ShareBookController extends Controller
{
    // Danh sách truyện
    public function index()
    {
        $books = Book::withCount('shareBooks')->get();

        return view('admin.sharebooks.index', compact('books'));
    }

    // Chi tiết đồng tác giả
    public function details($id)
    {
        $book = Book::findOrFail($id);
        $shareBooks = SharedBook::where('book_id', $id)->with('user')->get();

        return view('admin.sharebooks.details', compact('book', 'shareBooks'));
    }
}
