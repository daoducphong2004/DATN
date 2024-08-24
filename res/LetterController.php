<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{

    public function index()
    {
        $a = Letter::all();
        return view('letter.index', compact('a'));
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|',
            'content' => 'required|string',
            'receiver_id' => 'required|integer',
            'sender_id' => 'required|integer',
            'status' => 'nullable|string',
        ]);

        // Tạo một bản ghi mới trong bảng Letter
        Letter::create($validatedData);

        return redirect()->route('letter.index')->with('success', 'Thư đã được tạo thành công.');
    }


    public function edit(Letter $id)
    {
        return view('letter.edit', compact('id'));
    }



    public function update(Request $request, Letter $id)
    {
        // Xác thực dữ liệu trước khi cập nhật vào database
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'receiver_id' => 'required|integer', // Đảm bảo 'users' là bảng chứa id của receiver
            'sender_id' => 'required|integer',   // Đảm bảo 'users' là bảng chứa id của sender
            'status' => 'nullable|string', // Trường 'status' không bắt buộc
        ]);

        // Cập nhật dữ liệu
        $id->update($validatedData);
        return redirect()->route('letter.index');
    }


    public function destroy(Letter $id)
    {
        $id->delete();
        return redirect()->route('letter.index');
    }
}
