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
    public function about()
    {
        return view('home.about');
    }

    public function chuongtruyen()
    {
        return view('reading.reader');
    }

    public function danhsach()
    {
        return view('stories.list');
    }
    public function UserHome()
    {
        return view('users.profile');
    }
    public function createTruyen()
    {
        return view('stories.create');
    }
    public function sangtac()
    {
        return view('stories.composer');
    }
    public function xuatban()
    {
        return view('stories.publish');
    }
    public function vuadang()
    {
        return view('stories.pandemic');
    }
    public function thaoluan()
    {
        return view('stories.discuss');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function email()
    {
        return view('auth.password.email');
    }

    public function reset()
    {
        return view('auth.password.reset');
    }
}
