<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //// BannerController.php
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->image_path = $request->image_path;
        $banner->save();

        return redirect()->route('admin.banners.index');
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->image_path = $request->image_path;
        $banner->is_active = $request->has('is_active') ? true : false;
        $banner->save();

        return redirect()->route('admin.banners.index');
    }
}
