<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        // lấy book
        $stories = book::query()->with('user','groups')->paginate(10);
        // dd($storys);
        return view('admin.stories.list-story',compact('stories'));
    }
    public function createboook(Request $request){
        $genres = genre::pluck('id', 'name');
        $groups = group::pluck('id', 'name');

        return view('admin.stories.createbook', compact('genres', 'groups'));
    }
}
