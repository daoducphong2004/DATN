<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function reader()
    {
        return view('reading.reader');
    }
}
