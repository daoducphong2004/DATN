<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ChuongModel;



class HomeController extends Controller
{
    public function home()
    {
        $data_category = session('data_category', []);
        return view('frontend.index',compact('data_category'));
    }

    public function chuongtruyen()
    {
        return view('frontend.chuongtruyen');
    }
}
