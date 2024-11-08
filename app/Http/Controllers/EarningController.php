<?php

namespace App\Http\Controllers;

use App\Models\Earning;
use Illuminate\Http\Request;

class EarningController extends Controller
{

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'chapter_id' => 'required|exists:chapters,id',
                'book_id' => 'required|exists:books,id',
                'amount' => 'required|numeric|min:0|max:9999999999999.99',
            ]);

            Earning::create($validatedData);

            return redirect()->back()->with('success', 'Thu nhập đã được lưu trữ thành công.');
        }
}
