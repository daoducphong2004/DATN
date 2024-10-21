<?php

use App\Http\Controllers\Admin\BookCommentController as AdminBookCommentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\UserGroupController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\ChaptercommentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\USER\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookcommentController;
use App\Http\Controllers\CommentBookController ;
use App\Http\Controllers\CommentChapterController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\ReadingHistoryController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SharedBookController;
use App\Http\Controllers\StoryManageController;
use App\Models\book;
use App\Models\episode;
use App\Models\genre;
use App\Models\SharedBook;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('home', [HomeController::class, 'index1']);
Route::get('/', [HomeController::class, 'index1'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('login', [AccountController::class, 'dialogLogin'])->name('dialogLogin');
Route::post('login', [AccountController::class, 'login'])->name('login');
Route::get('register', [AccountController::class, 'register'])->name('register');
Route::post('register', [AccountController::class, 'createAccount'])->name('createAccount');
Route::get('email', [AccountController::class, 'email']);
Route::get('reset', [AccountController::class, 'reset']);

// Route::get('gioithieu', [UserController::class, 'gioithieu']);
// Route::get('chuong', [UserController::class, 'chuong']);
Route::get('convert', [HomeController::class, 'convert']);
Route::get('vuadang', [HomeController::class, 'vuadang']);
Route::get('sangtac', [HomeController::class, 'sangtac']);
Route::get('xuatban', [HomeController::class, 'xuatban']);


Route::get('huongdan_dangtruyen', [HomeController::class, 'huongdan_dangtruyen']);
Route::get('huongdan_gioithieu', [HomeController::class, 'huongdan_gioithieu']);
Route::get('huongdan_gopy', [HomeController::class, 'huongdan_gopy']);

Route::get('search', [HomeController::class, 'search']);
Route::get('kesach', [HomeController::class, 'kesach']);
Route::get('bookmark', [HomeController::class, 'bookmark']);
Route::get('lichsu', [HomeController::class, 'lichsu']);
Route::get('tinnhanmoi', [HomeController::class, 'tinnhanmoi']);
Route::get('tinnhan', [HomeController::class, 'tinnhan']);
Route::get('guitinnhan', [HomeController::class, 'guitinnhan']);
Route::get('taikhoan', [HomeController::class, 'taikhoan'])->name('taikhoan');



Route::get('UserHome', [HomeController::class, 'Userhome']);
// Route::get('createTruyen', [UserController::class, 'createTruyen']);
Route::get('conventThamGia', [HomeController::class, 'conventThamGia']);
Route::get('OLNDaDang', [HomeController::class, 'OLNDaDang']);
Route::get('OLNThamGia', [HomeController::class, 'OLNThamGia']);
Route::get('themThaoLuan', [HomeController::class, 'themThaoLuan']);
Route::get('thaoLuanCuaBan', [HomeController::class, 'thaoLuanCuaBan']);
Route::get('theLoai', [HomeController::class, 'theLoai']);
Route::get('thuVien', [HomeController::class, 'thuVien']);
Route::get('nhomSoHuu', [HomeController::class, 'nhomSoHuu']);
Route::get('nhomThamGia', [HomeController::class, 'nhomThamGia']);
Route::get('thao-luan',[ForumController::class,'index'])->name('thao-luan');
Route::get('themthaoluan',[ForumController::class,'create'])->name('themthaoluan');
Route::post('store_thaoluan',[ForumController::class,'store'])->name('store_thaoluan');
Route::get('/thao-luan/chi-tiet-thao-luan/{id}',[ForumController::class,'show'])->name('chi-tiet-thao-luan');
Route::post('/thao-luan/chi-tiet-thao-luan/{id}',[ForumCommentController::class,'store'])->name('cmt-child-forum');
Route::get('search',[SearchController::class,'index'])->name('search');

Route::prefix('admin')->group(function () {
    // Giao diện admin
    Route::get('/list-user', [AdminUserController::class, 'index'])->name('user_index');
    Route::get('/list-category', [CategoryController::class, 'index'])->name('category_index');
    Route::get('/list-story', [StoryController::class, 'index'])->name('story_index');

    Route::get('/list-comment', [CommentController::class, 'index'])->name('comment_index');
    Route::resource('bookComment', AdminBookCommentController::class);

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

    Route::get('/groups', [GroupController::class, 'index'])->name('groups_index');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups_create');
    Route::post('/groups/store', [GroupController::class, 'store'])->name('groups_store');
    Route::get('/groups/edit/{id}', [GroupController::class, 'edit'])->name('groups_edit');
    Route::put('/groups/update/{id}', [GroupController::class, 'update'])->name('groups_update');
    Route::delete('/groups/delete/{id}', [GroupController::class, 'destroy'])->name('groups_delete');

    Route::get('/user', [ControllersUserController::class,'index'])->name('user_index');
    Route::get('/user/create', [ControllersUserController::class, 'create'])->name('user_create');
    Route::post('/user/store', [ControllersUserController::class, 'store'])->name('user_store');
    Route::get('/user/edit/{id}', [ControllersUserController::class, 'edit'])->name('user_edit');
    Route::put('/user/update/{id}', [ControllersUserController::class, 'update'])->name('user_update');
    Route::delete('/user/delete/{id}', [ControllersUserController::class, 'destroy'])->name('user_delete');

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
// Route::get('danh-sach', [BookController::class, 'listStories'])->name('truyen.danhsach');
Route::get('truyen/{slug}/{chapter_slug}', [BookController::class, 'reading'])->name('truyen.chuong');
Route::get('truyen/{slug}/truyen/{episode_slug}', [EpisodeController::class, 'showU'])->name('truyen.tap');

Route::post('/reading-history', [ReadingHistoryController::class, 'store']);
Route::get('/lich-su-doc', [BookController::class, 'showReadingHistory'])->name('lich-su-doc');
Route::post('/chapters/{chapter}/purchase/{price}', [ChapterController::class, 'purchaseChapter'])->middleware('auth');
Route::get('/truyen/{book}/{chapter}/purchase/{price}', [ChapterController::class, 'purchase'])->name('chapter.purchase');


Route::post('/book/{book}/share-access', [SharedBookController::class, 'shareEditAccess'])->name('book.shareAccess');
Route::post('/book/{book}/transfer-ownership', [SharedBookController::class, 'transferOwnership'])->name('book.transferOwnership');
Route::get('/book/{book}/shared-users', [SharedBookController::class, 'listSharedUsers'])->name('book.shareList');
Route::post('/book/{book}/revoke', [SharedBookController::class, 'revokeEditAccess'])->name('book.sharerevoke');



Route::get('/truyenDaDang',[StoryManageController::class,'StoryTranslatelist'])->name('manage.mytranslatebook');
Route::get('/truyenThamGia', [StoryManageController::class, 'StoryTranslateListShare'])->name('manage.booktranslateshared');

Route::get('/OLNDaDang', [StoryManageController::class, 'StoryOLNlist'])->name('manage.mybookOLN');
Route::get('/OLNThamGia', [StoryManageController::class, 'StoryOLNListShare'])->name('manage.bookOLNshared');

Route::get('/convertDaDang', [StoryManageController::class, 'StoryConvertlist'])->name('manage.myConvertbook');
Route::get('/convertThamGia', [StoryManageController::class, 'StoryConvertListShare'])->name('manage.bookConvertshared');



Route::get('/thanh-vien/{userId}', [HomeController::class, 'thanhvien'])->name('user.books');
Route::resource('banners', BannerController::class);

Route::get('/lich-su-mua', [PurchaseHistoryController::class, 'index'])->name('purchase.history')->middleware('auth');

// End Phong

//Thanh toan
Route::post("/vnpay_payment", [PaymentController::class, 'payment']);
Route::get('/vnpay-return', [PaymentController::class, 'paymentReturn']);

// User trong Group
Route::prefix('groups')->group(function () {
    Route::get('/users', [UserGroupController::class, 'index'])->name('groups.users.index');
    Route::delete('users/{id}', [UserGroupController::class, 'delete'])->name('groups.users.delete');
});

Route::post('truyen/{slug}/comment', [BookcommentController::class, 'create'])->name('addComment');


// Rating hoalt
// Route::get('truyen/rating/{slug}', [RatingController::class, 'handleRating'])->name('rating');
Route::get('rating/{slug}', [RatingController::class, 'handleRating'])->name('rating');
Route::post('rating/{slug}', [RatingController::class, 'handleRatingPost'])->name('rating.submit');
Route::post('/ratings/{rating}/like', [RatingController::class, 'toggleLike'])->name('rating.toggleLike');

require __DIR__ . '/admin.php';

Route::resource('author', AuthorController::class);
Route::post('comment')->name('addChapterComment');//sau làm phần comment chapter thì xóa dòng này đi

// Bộ lọc
Route::get('danh-sach/{alphabet?}', [FilterController::class, 'filterDanhSach'])->name('filterDanhSach');
Route::get('the-loai/{slug}', [FilterController::class, 'filterTheLoai'])->name('filterTheLoai');
