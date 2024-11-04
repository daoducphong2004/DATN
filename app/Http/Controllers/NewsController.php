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

    public function newsHandleAdd(){

    }
}
