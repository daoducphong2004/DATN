<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::all();
        return view('admin.letter.index', compact('letters'));
    }


    public function create()
    {
        return view('admin.letter.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|',
            'content' => 'required|string',
            'receiver_id' => 'required|integer|exists:users,id',
            'sender_id' => 'required|integer|exists:users,id',
            'status' => 'nullable|string',
        ]);

        Letter::create($validatedData);
        return redirect()->route('letter_index');
    }



    public function edit(Letter $id)
    {
        return view('admin.letter.edit', compact('id'));
    }



    public function update(Request $request, Letter $id)
    {
        // Xác thực dữ liệu trước khi cập nhật vào database
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'receiver_id' => 'required|integer|exists:users,id',
            'sender_id' => 'required|integer|exists:users,id',
            'status' => 'nullable|string',
        ]);



        $id->update($validatedData);
        return redirect()->route('letter_index');
    }


    public function destroy(Letter $id)
    {
        $id->delete();
        return redirect()->route('letter_index');
    }
}
