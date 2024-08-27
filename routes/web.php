<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use function Ramsey\Uuid\v1;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');
        Route::get('/about', 'about')->name('about');
        Route::get('login', 'login')->name('login');
        route::get('register', 'register')->name('register');
        route::get('sangtac', 'sangtac')->name('sangtac');
        route::get('vuadang', 'vuadang')->name('vuadang');
        route::get('xuatban', 'xuatban')->name('xuatban');
        route::get('thaoluan', 'thaoluan')->name('thaoluan');
        route::get('danhsach', 'danhsach')->name('danhsach');
        route::get('userhome', 'userhome')->name('userhome');
        route::get('createTruyen', 'createTruyen')->name('createTruyen');
    });
