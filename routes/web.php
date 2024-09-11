<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\ChaptercommentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('home', [UserController::class, 'index']);
Route::get('/', [UserController::class, 'index'])->name('home');
// Route::get('gioithieu', [UserController::class, 'gioithieu']);
// Route::get('chuong', [UserController::class, 'chuong']);
// Route::get('vuadang', [UserController::class, 'vuadang']);
// Route::get('thaoluan', [UserController::class, 'thaoluan']);


Route::get('login', [UserController::class, 'dialogLogin'])->name('dialogLogin');
Route::post('login', [UserController::class, 'login'])->name('login');
// Route::get('register', [UserController::class, 'register']);
// Route::resource('story', BookController::class);

// Route::get('stories/information', function () {
//     return view('stories.iframe.information');
// })->name('storyinformation');


Route::get('gioithieu', [UserController::class, 'gioithieu']);
Route::get('chuong', [UserController::class, 'chuong']);
Route::get('danhsach', [UserController::class, 'danhsach']);
Route::get('vuadang', [UserController::class, 'vuadang']);
Route::get('thaoluan', [UserController::class, 'thaoluan']);
Route::get('sangtac', [UserController::class, 'sangtac']);
Route::get('xuatban', [UserController::class, 'xuatban']);

Route::get('huongdan_dangtruyen', [UserController::class, 'huongdan_dangtruyen']);
Route::get('huongdan_gioithieu', [UserController::class, 'huongdan_gioithieu']);
Route::get('huongdan_gopy', [UserController::class, 'huongdan_gopy']);
Route::get('taikhoan', [UserController::class, 'taikhoan'])->name('taikhoan');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'createAccount'])->name('createAccount');
Route::get('email', [UserController::class, 'email']);
Route::get('reset', [UserController::class, 'reset']);

Route::get('UserHome', [UserController::class, 'home']);
// Route::get('createTruyen', [UserController::class, 'createTruyen']);
Route::get('truyenDaDang', [UserController::class, 'truyenDaDang']);
Route::get('truyenThamGia', [UserController::class, 'truyenThamGia']);
Route::get('conventDaDang', [UserController::class, 'conventDaDang']);
Route::get('conventThamGia', [UserController::class, 'conventThamGia']);
Route::get('OLNDaDang', [UserController::class, 'OLNDaDang']);
Route::get('OLNThamGia', [UserController::class, 'OLNThamGia']);
Route::get('themThaoLuan', [UserController::class, 'themThaoLuan']);
Route::get('thaoLuanCuaBan', [UserController::class, 'thaoLuanCuaBan']);
Route::get('theLoai', [UserController::class, 'theLoai']);
Route::get('thuVien', [UserController::class, 'thuVien']);
Route::get('nhomSoHuu', [UserController::class, 'nhomSoHuu']);
Route::get('nhomThamGia', [UserController::class, 'nhomThamGia']);


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

    Route::get('/genres', [GenreController::class, 'index'])->name('genres_index');
    Route::get('/genres/create', [GenreController::class, 'create'])->name('genres_create');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres_store');
    Route::get('/genres/edit/{id}', [GenreController::class, 'edit'])->name('genres_edit');
    Route::put('/genres/update/{id}', [GenreController::class, 'update'])->name('genres_update');
    Route::delete('/genres/delete/{id}', [GenreController::class, 'destroy'])->name('genres_delete');
});


Route::prefix('chapter-comments')->group(function () {
    Route::get('/{chapterId}', [ChaptercommentController::class, 'getByChapterId'])->name('get_by_chapter_id');
    Route::get('/', [ChaptercommentController::class, 'index'])->name('chapter_comments_index');
    Route::get('/show/{id}', [ChaptercommentController::class, 'show'])->name('chapter_comments_show');
    Route::get('/create', [ChaptercommentController::class, 'create'])->name('chapter_comments_create');
    Route::post('/store', [ChaptercommentController::class, 'store'])->name('chapter_comments_store');
    Route::get('/edit/{id}', [ChaptercommentController::class, 'edit'])->name('chapter_comments_edit');
    Route::put('/update/{id}', [ChaptercommentController::class, 'update'])->name('chapter_comments_update');
    Route::delete('/delete/{id}', [ChaptercommentController::class, 'delete'])->name('chapter_comments_delete');
});

// Phong
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
    return view('stories.iframe.episodes.formAddEpisode', compact('book'));
})->name('storyepisode');

Route::get('stories/addchapter/{episode}', function (episode $episode) {
    return view('stories.iframe.chapters.formAddChapter', compact('episode'));
})->name('storychapter');

Route::get('truyen/{slug}', [BookController::class, 'showU'])->name('truyen.truyen');
Route::get('danh-sach', [BookController::class, 'listStories'])->name('truyen.danhsach');
Route::get('truyen/{slug}/{chapter_slug}', [BookController::class, 'reading'])->name('truyen.chuong');
Route::get('truyen/{slug}/truyen/{episode_slug}', [EpisodeController::class, 'showU'])->name('truyen.tap');

// End Phong
