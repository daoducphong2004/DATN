<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');
    });
Route::resource('story', BookController::class);

Route::get('stories/information', function () {
    return view('stories.iframe.information');
})->name('storyinformation');


Route::get('stories/tree', function () {
    return view('stories.iframe.tree');
})->name('storytree');