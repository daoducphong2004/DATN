<?php

use App\Http\Controllers\Admin\BookCommentController as AdminBookCommentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\UserGroupController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\ChaptercommentController;
use App\Http\Controllers\ContractController;
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
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\CommentBookController;
use App\Http\Controllers\CommentChapterController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\purchaseStoryController;
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

Route::get('home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('login', [AccountController::class, 'dialogLogin'])->name('dialogLogin');
Route::post('login', [AccountController::class, 'login'])->name('login');
Route::get('register', [AccountController::class, 'register'])->name('register');
Route::post('register', [AccountController::class, 'createAccount'])->name('createAccount');
Route::get('email', [AccountController::class, 'email']);
Route::get('reset', [AccountController::class, 'reset']);

// Route::get('gioithieu', [UserController::class, 'gioithieu']);
// Route::get('chuong', [UserController::class, 'chuong']);

Route::get('convert', [HomeController::class, 'convert'])->name('convert');
// Route::get('vuadang', [HomeController::class, 'vuadang']);
Route::get('sang-tac', [HomeController::class, 'sangtac'])->name('sangtac');
Route::get('xuat-ban', [HomeController::class, 'xuatban'])->name('xuatban');



Route::get('huongdan_dangtruyen', [HomeController::class, 'huongdan_dangtruyen'])->name('huongdan_dangtruyen');
Route::get('huongdan_gioithieu', [HomeController::class, 'huongdan_gioithieu'])->name('huongdan_gioithieu');
Route::get('huongdan_gopy', [HomeController::class, 'huongdan_gopy'])->name('huongdan_gopy');

// Route::get('search', [HomeController::class, 'search']);
Route::get('ke-sach', [HomeController::class, 'kesach'])->name('ke-sach');
Route::get('lich-su', [HomeController::class, 'lichsu'])->name('lich-su');
Route::get('tin-nhan-moi', [HomeController::class, 'tinnhanmoi'])->name('tin-nhan-moi');
Route::get('tin-nhan', [HomeController::class, 'tinnhan'])->name('tin-nhan');
Route::get('gui-tin-nhan', [HomeController::class, 'guitinnhan'])->name('gui-tin-nhan');
// Route::get('taikhoan', [HomeController::class, 'taikhoan'])->name('taikhoan');



Route::get('UserHome', [HomeController::class, 'Userhome']);
// Route::get('createTruyen', [UserController::class, 'createTruyen']);
Route::get('truyenDaDang', [HomeController::class, 'truyenDaDang']);
Route::get('truyenThamGia', [HomeController::class, 'truyenThamGia']);
Route::get('conventDaDang', [HomeController::class, 'conventDaDang']);
Route::get('conventThamGia', [HomeController::class, 'conventThamGia']);
Route::get('OLNDaDang', [HomeController::class, 'OLNDaDang']);
Route::get('OLNThamGia', [HomeController::class, 'OLNThamGia']);
Route::get('theLoai', [HomeController::class, 'theLoai']);
Route::get('thuVien', [HomeController::class, 'thuVien']);
Route::get('nhomSoHuu', [HomeController::class, 'nhomSoHuu']);
Route::get('nhomThamGia', [HomeController::class, 'nhomThamGia']);
Route::get('thao-luan',  [ForumController::class,  'index'])->name('thao-luan');
Route::get('themthaoluan',  [ForumController::class,  'create'])->name('themthaoluan');
Route::post('store_thaoluan',  [ForumController::class,  'store'])->name('store_thaoluan');
Route::get('/thao-luan/chi-tiet-thao-luan/{id}',  [ForumController::class,  'show'])->name('chi-tiet-thao-luan');
Route::post('/thao-luan/chi-tiet-thao-luan/{id}',  [ForumCommentController::class,  'store'])->name('cmt-child-forum');
Route::get('thao-luan', [ForumController::class, 'filterThaoLuan'])->name('thao-luan');
Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('search/results', [SearchController::class, 'indexShow'])->name('search_re');



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



//Phong
Route::prefix('action')->group(function () {
// Trong đây sẽ là những route có trong UserHome

});
Route::resource('story', BookController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('chapter', ChapterController::class);
Route::post('/upload-image', [ChapterController::class, 'uploadImage'])->name('upload.image');

Route::get('stories/information/{book}', function (book $book) {
    $genres = genre::pluck('id', 'name');
    return view('stories.iframe.information', compact('book', 'genres'));
})->middleware('auth')->name('storyinformation');

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
Route::get('truyen/{slug}/tap/{episode_slug}', [EpisodeController::class, 'showU'])->name('truyen.tap');

Route::post('/reading-history', [ReadingHistoryController::class, 'store']);
Route::get('/lich-su-doc', [BookController::class, 'showReadingHistory'])->name('lich-su-doc');
Route::post('/chapters/{chapter}/purchase', [purchaseStoryController::class, 'purchaseChapter'])->middleware('auth');
Route::post('/truyen/{book}/{chapter}/purchase', [purchaseStoryController::class, 'purchase'])->name('chapter.purchase');

//hiển thị nhóm
Route::get('/nhom-dich/{slug}',[GroupController::class,'showU'])->name('group.showU');


Route::get('/thanh-vien/{userId}', [HomeController::class, 'thanhvien'])->name('user.books');



Route::post('/like-book/{id}', [BookController::class, 'bookLike'])->name('book.like');
Route::post('/sendEmail', [MailController::class, 'sendMail'])->name('mail.send');

Route::resource('story', BookController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('chapter', ChapterController::class);
Route::post('/upload-image', [ChapterController::class, 'uploadImage'])->name('upload.image');



Route::middleware(['auth'])->group(function () {

    //Hợp đồng
    Route::resource('contracts', ContractController::class);
    // web.php
    Route::post('/contract/{id}/update-image', [ContractController::class, 'updateImage'])->name('contract.updateImage');
    




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

    //order và cart
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/gio-hang', [CartController::class, 'viewCart'])->name('cart');
    Route::delete('/cart/{id}', [CartController::class, 'removeFromCart']);
    Route::get('/cart/count', [CartController::class, 'getCartCount']);
    Route::post('/cart/addMultiple', [CartController::class, 'addMultipleToCart'])->name('cart.addMultiple');
    Route::post('/order/create', [purchaseStoryController::class, 'createOrder']);
    Route::get('/lich-su-truyen/{book}', [BookController::class, 'showUserHistory'])
        ->name('user.books.history');

    Route::post('/books/{bookId}/purchase-all', [purchaseStoryController::class, 'purchaseAllChaptersInBook'])->name('books.purchaseAllChapters');

    Route::get('/lich-su-mua', [PurchaseHistoryController::class, 'index'])->name('purchase.history')->middleware('auth');
    Route::post('/purchase/episode/{episodeId}', [purchaseStoryController::class, 'purchaseAllChaptersInEpisode'])->name('episode.purchase')->middleware('auth');



    //Sắp xếp thứ tự của tập truyện và chương truyện
    Route::get('/episodes/sort/{bookId}', [EpisodeController::class, 'sortView'])->name('episodes.sortView');
    Route::post('/episodes/update-order', [EpisodeController::class, 'updateOrder'])->name('episodes.updateOrder');

    Route::get('/chapters/{episodeId}/', [ChapterController::class, 'showChapters'])->name('chapter.sortView');
    Route::post('/chapters/{episodeId}/order', [ChapterController::class, 'updateChapterOrder'])->name('chapter.updateOrder');


    //Crud bookmark cho truyện
        
    Route::get('/bookmark', [BookmarkController::class, 'index'])->name('bookmark');
    Route::post('/chapter/bookmark', [BookmarkController::class, 'store']);
    Route::patch('/chapter/bookmark/{id}', [BookmarkController::class, 'update']);
    Route::delete('/chapter/bookmark/{id}', [BookmarkController::class, 'destroy']);
    Route::get('/chapter/{chapter}/bookmarks', [BookmarkController::class, 'getUserBookmarks']);



    Route::get('/truyenDaDang', [StoryManageController::class, 'StoryTranslatelist'])->name('manage.mytranslatebook');
    Route::get('/truyenThamGia', [StoryManageController::class, 'StoryTranslateListShare'])->name('manage.booktranslateshared');

    Route::get('/OLNDaDang', [StoryManageController::class, 'StoryOLNlist'])->name('manage.mybookOLN');
    Route::get('/OLNThamGia', [StoryManageController::class, 'StoryOLNListShare'])->name('manage.bookOLNshared');

    Route::get('/convertDaDang', [StoryManageController::class, 'StoryConvertlist'])->name('manage.myConvertbook');
    Route::get('/convertThamGia', [StoryManageController::class, 'StoryConvertListShare'])->name('manage.bookConvertshared');


    Route::post('/book/{book}/share-access', [SharedBookController::class, 'shareEditAccess'])->name('book.shareAccess');
    Route::post('/book/{book}/transfer-ownership', [SharedBookController::class, 'transferOwnership'])->name('book.transferOwnership');
    Route::get('/book/{book}/shared-users', [SharedBookController::class, 'listSharedUsers'])->name('book.shareList');
    Route::post('/book/{book}/revoke', [SharedBookController::class, 'revokeEditAccess'])->name('book.sharerevoke');

    Route::get('/tu-sach-da-mua', [purchaseStoryController::class, 'index'])->name('bookshelf.index');
});

//End Phong

//Thanh toan
Route::get("/choose_payment", [PaymentController::class, 'indexPayment'])->name('indexPayment');
Route::get("/choose_cash", [PaymentController::class, 'indexCash'])->name('indexCash');
Route::post("/vnpay_payment", [PaymentController::class, 'payment'])->name('payment');
Route::get('/vnpay-return', [PaymentController::class, 'paymentReturn']);
Route::get('/payment-success/{paymentData}', [PaymentController::class, 'paymentSuccess'])->name('paymentSuccess');
Route::get('/payment-history/{userId}', [PaymentController::class, 'paymentHistory'])->name('paymentHistory');

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
Route::post('/accept-request/{id}', [AuthorController::class, 'acceptRequest'])->name('accept_request');
Route::post('/reject-request/{id}', [AuthorController::class, 'rejectRequest'])->name('reject_request');

Route::post('comment')->name('addChapterComment'); //sau làm phần comment chapter thì xóa dòng này đi

// Bộ lọc
Route::get('danh-sach/{alphabet?}', [FilterController::class, 'filterDanhSach'])->name('filterDanhSach');
Route::get('the-loai/{slug}', [FilterController::class, 'filterTheLoai'])->name('filterTheLoai');

// Báo cáo
Route::post('/report', [ReportController::class, 'store'])->name('report.store');
