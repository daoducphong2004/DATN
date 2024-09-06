<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ChuongModel;



class HomeController extends Controller
{
    public function home()
    {
        $data = book::query()->latest('id')->paginate(5);
        return view('home.index', compact('data'));
    }

    public function chuongtruyen()
    {
        // return view('frontend.chuongtruyen');
    }
}
