<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookcommentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\ChaptercommentController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\EpisodeController;
// use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\USER\HomeController;
use App\Models\book;
use App\Models\chapter;
use App\Models\episode;
use App\Models\genre;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'register']);

Route::get('danh-sach', [BookController::class, 'listStories'])->name('truyen.danhsach');
Route::get('truyen/{slug}', [BookController::class, 'showU'])->name('truyen.truyen');
Route::post('truyen/{slug}/comment', [BookCommentController::class, 'create'])->name('addComment');

Route::get('truyen/{slug}/{chapter_slug}', [BookController::class, 'reading'])->name('truyen.chuong');
Route::post('truyen/{slug}/{chapter_slug}/comment', [ChaptercommentController::class, 'create'])->name('addChapterComment');
Route::resource('story', BookController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('chapter', ChapterController::class);
Route::post('/upload-image', [ChapterController::class, 'uploadImage'])->name('upload.image');
Route::get('stories/information/{book}', function (book $book) {
    $genres = genre::pluck('id', 'name');
    return view('stories.iframe.information', compact('book', 'genres'));
})->name('storyinformation');

Route::get('stories/tree/{book}', function (book $book) {
    return view('stories.iframe.tree', compact('book'));
})->name('storytree');

Route::get('stories/addepisode/{book}', function (book $book) {
    return view('stories.iframe.formAddEpisode', compact('book'));
})->name('storyepisode');

Route::get('stories/addchapter/{episode}', function (episode  $episode) {
    return view('stories.iframe.formAddChapter', compact('episode'));
})->name('storychapter');

Route::get('vuadang', [HomeController::class, 'vuadang']);
Route::get('convert', [HomeController::class, 'convert']);
Route::get('thaoluan', [HomeController::class, 'thaoluan']);
Route::get('CDthaoluan', [HomeController::class, 'CDthaoluan']);
Route::get('sangtac', [HomeController::class, 'sangtac']);
Route::get('xuatban', [HomeController::class, 'xuatban']);

Route::get('huongdan_dangtruyen', [HomeController::class, 'huongdan_dangtruyen']);
Route::get('huongdan_gioithieu', [HomeController::class, 'huongdan_gioithieu']);
Route::get('huongdan_gopy', [HomeController::class, 'huongdan_gopy']);
Route::get('taikhoan', [HomeController::class, 'taikhoan'])->name('taikhoan');

// Route::get('login', [HomeController::class, 'login']);
// Route::get('register', [HomeController::class, 'register']);
// Route::get('email', [HomeController::class, 'email']);
// Route::get('reset', [HomeController::class, 'reset']);

// Route::get('UserHome', [HomeController::class, 'home']);
// Route::get('createTruyen', [HomeController::class, 'createTruyen']);
// Route::get('truyenDaDang', [HomeController::class, 'truyenDaDang']);
// Route::get('truyenThamGia', [HomeController::class, 'truyenThamGia']);
// Route::get('conventDaDang', [HomeController::class, 'conventDaDang']);
// Route::get('conventThamGia', [HomeController::class, 'conventThamGia']);
// Route::get('OLNDaDang', [HomeController::class, 'OLNDaDang']);
// Route::get('OLNThamGia', [HomeController::class, 'OLNThamGia']);
// Route::get('themThaoLuan', [HomeController::class, 'themThaoLuan']);
// Route::get('thaoLuanCuaBan', [HomeController::class, 'thaoLuanCuaBan']);
// Route::get('theLoai', [HomeController::class, 'theLoai']);
// Route::get('thuVien', [HomeController::class, 'thuVien']);
// Route::get('nhomSoHuu', [HomeController::class, 'nhomSoHuu']);
// Route::get('nhomThamGia', [HomeController::class, 'nhomThamGia']);


Route::prefix('admin')->group(function () {
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
});



// Route::resource('story', BookController::class);
// Route::resource('episode', EpisodeController::class);
// Route::resource('chapter', ChapterController::class);
// Route::post('/upload-image', [ChapterController::class, 'uploadImage'])->name('upload.image');
// Route::get('stories/information/{book}', function (book $book) {
//     $genres = genre::pluck('id', 'name');
//     return view('stories.iframe.information', compact('book', 'genres'));
// })->name('storyinformation');

// Route::get('stories/tree/{book}', function (book $book) {
//     return view('stories.iframe.tree', compact('book'));
// })->name('storytree');

// Route::get('stories/addepisode/{book}', function (book $book) {
//     return view('stories.iframe.formAddEpisode', compact('book'));
// })->name('storyepisode');

// Route::get('stories/addchapter/{episode}', function (episode  $episode) {
//     return view('stories.iframe.formAddChapter', compact('episode'));
// })->name('storychapter');

// Route::get('truyen/{slug}', [BookController::class, 'showU'])->name('truyen.truyen');
// Route::get('danh-sach', [BookController::class, 'listStories'])->name('truyen.danhsach');
// Route::get('truyen/{slug}/{chapter_slug}', [BookController::class, 'reading'])->name('truyen.chuong');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
