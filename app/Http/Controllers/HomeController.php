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
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function list()
    {
        return view('stories.index');
    }
    public function profile()
    {
        return view('users.profile');
    }
    public function create()
    {
        return view('stories.create');
    }
    public function composer()
    {
        return view('stories.composer');
    }
    public function publish()
    {
        return view('stories.publish');
    }
    public function pandemic()
    {
        return view('stories.pandemic');
    }
    public function discuss()
    {
        return view('stories.discuss');
    }
}
