<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ChuongModel;



class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function chuongtruyen()
    {
        return view('frontend.chuongtruyen');
    }
}
