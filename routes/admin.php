<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\UserGroupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\ChaptercommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\USER\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookcommentController;
use App\Http\Controllers\CommentChapterController;
use App\Models\book;
use App\Models\chapter;
use App\Models\episode;
use App\Models\genre;

Route::get('/admin/dashboard', function () {
    return 'Admin Dashboard';
});

Route::middleware(['auth', 'checkSuperAdmin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    // Giao diện admin
    Route::get('/list-user', [AdminUserController::class, 'index'])->name('user_index');
    Route::get('/list-category', [CategoryController::class, 'index'])->name('category_index');
    Route::get('/list-story', [StoryController::class, 'index'])->name('story_index');
    Route::get('/list-comment', [CommentController::class, 'index'])->name('comment_index');


    Route::get('/letter', [LetterController::class, 'index'])->name('letter_index');
    Route::get('/letter/create', [LetterController::class, 'create'])->name('letter_create');
    Route::post('/letter/store', [LetterController::class, 'store'])->name('letter_store');
    Route::get('/letter/edit/{id}', [LetterController::class, 'edit'])->name('letter_edit');
    Route::put('/letter/update/{id}', [LetterController::class, 'update'])->name('letter_update');
    Route::delete('/letter/delete/{id}', [LetterController::class, 'destroy'])->name('letter_delete');


    Route::get('/bookmarks', [BookmarksController::class, 'index'])->name('bookmarks_index');
    Route::get('/bookmarks/create', [BookmarksController::class, 'create'])->name('bookmarks_create');
    Route::post('/bookmarks/store', [BookmarksController::class, 'store'])->name('bookmarks_store');
    Route::get('/bookmarks/edit/{id}', [BookmarksController::class, 'edit'])->name('bookmarks_edit');
    Route::put('/bookmarks/update/{id}', [BookmarksController::class, 'update'])->name('bookmarks_update');
    Route::delete('/bookmarks/delete/{id}', [BookmarksController::class, 'destroy'])->name('bookmarks_delete');


    Route::get('/bookshelves', [BookshelvesController::class, 'index'])->name('bookshelves_index');
    Route::get('/bookshelves/create', [BookshelvesController::class, 'create'])->name('bookshelves_create');
    Route::post('/bookshelves/store', [BookshelvesController::class, 'store'])->name('bookshelves_store');
    Route::get('/bookshelves/edit/{id}', [BookshelvesController::class, 'edit'])->name('bookshelves_edit');
    Route::put('/bookshelves/update/{id}', [BookshelvesController::class, 'update'])->name('bookshelves_update');
    Route::delete('/bookshelves/delete/{id}', [BookshelvesController::class, 'destroy'])->name('bookshelves_delete');

    Route::get('/genres', [GenreController::class, 'index'])->name('genres_index');
    Route::get('/genres/create', [GenreController::class, 'create'])->name('genres_create');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres_store');
    Route::get('/genres/edit/{id}', [GenreController::class, 'edit'])->name('genres_edit');
    Route::put('/genres/update/{id}', [GenreController::class, 'update'])->name('genres_update');
    Route::delete('/genres/delete/{id}', [GenreController::class, 'destroy'])->name('genres_delete');
});
Route::middleware(['auth', 'checkLoginAdmin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    // Giao diện admin
    Route::get('/list-user', [AdminUserController::class, 'index'])->name('user_index');
    Route::get('/list-category', [CategoryController::class, 'index'])->name('category_index');
    Route::get('/list-story', [StoryController::class, 'index'])->name('story_index');
    Route::get('/list-comment', [CommentController::class, 'index'])->name('comment_index');


    // Route::get('/letter', [LetterController::class, 'index'])->name('letter_index');
    // Route::get('/letter/create', [LetterController::class, 'create'])->name('letter_create');
    // Route::post('/letter/store', [LetterController::class, 'store'])->name('letter_store');
    // Route::get('/letter/edit/{id}', [LetterController::class, 'edit'])->name('letter_edit');
    // Route::put('/letter/update/{id}', [LetterController::class, 'update'])->name('letter_update');
    // Route::delete('/letter/delete/{id}', [LetterController::class, 'destroy'])->name('letter_delete');


    Route::get('/bookmarks', [BookmarksController::class, 'index'])->name('bookmarks_index');
    Route::get('/bookmarks/create', [BookmarksController::class, 'create'])->name('bookmarks_create');
    Route::post('/bookmarks/store', [BookmarksController::class, 'store'])->name('bookmarks_store');
    Route::get('/bookmarks/edit/{id}', [BookmarksController::class, 'edit'])->name('bookmarks_edit');
    Route::put('/bookmarks/update/{id}', [BookmarksController::class, 'update'])->name('bookmarks_update');
    Route::delete('/bookmarks/delete/{id}', [BookmarksController::class, 'destroy'])->name('bookmarks_delete');


    Route::get('/bookshelves', [BookshelvesController::class, 'index'])->name('bookshelves_index');
    Route::get('/bookshelves/create', [BookshelvesController::class, 'create'])->name('bookshelves_create');
    Route::post('/bookshelves/store', [BookshelvesController::class, 'store'])->name('bookshelves_store');
    Route::get('/bookshelves/edit/{id}', [BookshelvesController::class, 'edit'])->name('bookshelves_edit');
    Route::put('/bookshelves/update/{id}', [BookshelvesController::class, 'update'])->name('bookshelves_update');
    Route::delete('/bookshelves/delete/{id}', [BookshelvesController::class, 'destroy'])->name('bookshelves_delete');

    Route::get('/genres', [GenreController::class, 'index'])->name('genres_index');
    Route::get('/genres/create', [GenreController::class, 'create'])->name('genres_create');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres_store');
    Route::get('/genres/edit/{id}', [GenreController::class, 'edit'])->name('genres_edit');
    Route::put('/genres/update/{id}', [GenreController::class, 'update'])->name('genres_update');
    Route::delete('/genres/delete/{id}', [GenreController::class, 'destroy'])->name('genres_delete');
});
