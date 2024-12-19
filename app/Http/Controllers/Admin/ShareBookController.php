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
        $books = Book::withCount('sharedBooks')->paginate(10);

        return view('admin.sharebooks.index', compact('books'));
    }

    // Chi tiết đồng tác giả
    public function details($bookId)
    {
        $book = Book::findOrFail($bookId);
        $sharedBooks = $book->sharedBooks; // Lấy tất cả người đồng tác giả của truyện này

        return view('admin.sharebooks.details', compact('book', 'sharedBooks'));
    }
}
