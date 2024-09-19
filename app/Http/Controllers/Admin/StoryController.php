<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        // lấy book
        $stories = book::query()->with('user','groups')->paginate(10);
        // dd($storys);
        return view('admin.stories.list-story',compact('stories'));
    }
}
