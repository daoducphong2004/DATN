<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\USER\UserController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');
    });

Route::get('home', [UserController::class, 'index']);
Route::get('gioithieu', [UserController::class, 'gioithieu']);
Route::get('chuong', [UserController::class, 'chuong']);
Route::get('vuadang', [UserController::class,'vuadang']);
Route::get('thaoluan', [UserController::class, 'thaoluan']);


Route::get('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']);
