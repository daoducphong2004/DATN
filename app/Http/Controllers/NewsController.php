<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function newsIndex(){
        $dataNews = News::all();
        return view('admin.news.index', compact('dataNews'));
    }

    public function newsAdd(){
        return view('admin.news.add');
    }

    public function newsHandleAdd(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:100',
            'slug' => 'nullable|string|unique:news,slug|max:255',
        ]);

        // Tạo mới bài viết
        News::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Tin tức đã được thêm thành công.');
    }
}
