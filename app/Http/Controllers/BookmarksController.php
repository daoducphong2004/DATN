<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmarks::all();
        return view('admin.bookmarks.index', compact('bookmarks'));
    }


    public function create()
    {
        return view('admin.bookmarks.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',
            'page_number' => 'required|numeric',
            'note' => 'required|string',
            'status' => 'nullable|string',
            'book_id' => 'required|integer|exists:books,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        Bookmarks::create($validatedData);
        return redirect()->route('bookmarks_index');
    }



    public function edit(Bookmarks $id)
    {
        return view('admin.bookmarks.edit', compact('id'));
    }



    public function update(Request $request, Bookmarks $id)
    {
        // Xác thực dữ liệu trước khi cập nhật vào database
        $validatedData = $request->validate([
            'name' => 'required|string|',
            'description' => 'required|string',
            'page_number' => 'required|numeric',
            'note' => 'required|string',
            'status' => 'nullable|string',
            'book_id' => 'required|integer|exists:books,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);


        $id->update($validatedData);
        return redirect()->route('bookmarks_index');
    }


    public function destroy(Bookmarks $id)
    {
        $id->delete();
        return redirect()->route('bookmarks_index');
    }
}
