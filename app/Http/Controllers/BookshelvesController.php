<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use App\Models\Bookshelves;
use Illuminate\Http\Request;

class BookshelvesController extends Controller
{
    public function index()
    {
        $bookshelves = Bookshelves::all();
        return view('admin.bookshelves.index', compact('bookshelves'));
    }


    public function create()
    {
        return view('admin.bookshelves.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|string|',
            'description' => 'required|string',
            'location' => 'required|string',
            'status' => 'nullable|string',
            'book_id' => 'required|integer|exists:books,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        Bookshelves::create($validatedData);
        return redirect()->route('bookshelves_index');
    }



    public function edit(Bookshelves $id)
    {
        return view('admin.bookshelves.edit', compact('id'));
    }



    public function update(Request $request, Bookshelves $id)
    {
        // Xác thực dữ liệu trước khi cập nhật vào database
        $validatedData = $request->validate([
            'name' => 'required|string|',
            'description' => 'required|string',
            'location' => 'required|string',
            'status' => 'nullable|string',
            'book_id' => 'required|integer|exists:books,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $id->update($validatedData);
        return redirect()->route('bookshelves_index');
    }


    public function destroy(Bookshelves $id)
    {
        $id->delete();
        return redirect()->route('bookshelves_index');
    }
}
