<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/reader', 'reader')->name('reader');
        Route::get('login', 'login')->name('login');
        route::get('register', 'register')->name('register');
        route::get('composer', 'composer')->name('composer');
        route::get('pandemic', 'pandemic')->name('pandemic');
        route::get('publish', 'publish')->name('publish');
        route::get('discuss', 'discuss')->name('discuss');
        route::get('list', 'list')->name('list');
        route::get('profile', 'profile')->name('profile');
        route::get('create', 'create')->name('create');
    });
