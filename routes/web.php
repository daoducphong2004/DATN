<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');
    });
