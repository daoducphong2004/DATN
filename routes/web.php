<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function(){
    Route::get('/list-user', function(){
        return view('admin.users.list-user');
    })->name('listUser');

    Route::get('/list-category', function(){
        return view('admin.categories.list-category');
    })->name('listCategory');

    Route::get('/list-story', function(){
        return view('admin.stories.list-story');
    })->name('listStory');

    Route::get('/list-comment', function(){
        return view('admin.comments.list-comment');
    })->name('listComment');
});
