<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function gioithieu(){
        return view('home.gioithieu');
    }

    public function chuong(){
        return view('home.chuong');
    }

    public function vuadang(){
        return view('home.vuadang');
    }

    public function thaoluan(){
        return view('home.thaoluan');
    }

    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }
}
