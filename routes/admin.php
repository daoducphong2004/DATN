<?php

use App\Http\Controllers\Admin\adminContractController;
use App\Http\Controllers\Admin\ChapterCommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserGroupController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\BookCommentController as AdminBookCommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PurchaseManageController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\Admin\LetterController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookApprovalController;
use App\Http\Controllers\BookcommentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\WithdrawRequestController;

// Route::prefix('admin')->middleware('role:super_admin,admin,mod')->group(function () {
Route::prefix('admin')->group(function () {
    // Route::middleware('can:access-admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Giao diện admin
    Route::get('/list-user', [AdminUserController::class, 'index'])->name('user_index');
    Route::get('/list-category', [CategoryController::class, 'index'])->name('category_index');

    // User trong Group
    Route::prefix('groups')->group(function () {
        Route::get('/users', [UserGroupController::class, 'index'])->name('groups.users.index');
        Route::delete('users/{id}', [UserGroupController::class, 'delete'])->name('groups.users.delete');
    });
    // Route::get('/story', [StoryController::class, 'index'])->name('story_index');
    // Route::get('/story/add', [StoryController::class, 'createboook'])->name('story_add');

    Route::resource('bookComment', AdminBookCommentController::class)->middleware('role:super_admin,admin,mod');

    Route::get('/letter', [LetterController::class, 'index'])->name('letter_index');
    Route::get('/letter/create', [LetterController::class, 'create'])->name('letter_create');
    Route::post('/letter/store', [LetterController::class, 'store'])->name('letter_store');
    Route::get('/letter/edit/{id}', [LetterController::class, 'edit'])->name('letter_edit');
    Route::put('/letter/update/{id}', [LetterController::class, 'update'])->name('letter_update');
    Route::delete('/letter/delete/{id}', [LetterController::class, 'destroy'])->name('letter_delete');


    // Route::get('/bookmarks', [BookmarksController::class, 'index'])->name('bookmarks_index');
    // Route::get('/bookmarks/create', [BookmarksController::class, 'create'])->name('bookmarks_create');
    // Route::post('/bookmarks/store', [BookmarksController::class, 'store'])->name('bookmarks_store');
    // Route::get('/bookmarks/edit/{id}', [BookmarksController::class, 'edit'])->name('bookmarks_edit');
    // Route::put('/bookmarks/update/{id}', [BookmarksController::class, 'update'])->name('bookmarks_update');
    // Route::delete('/bookmarks/delete/{id}', [BookmarksController::class, 'destroy'])->name('bookmarks_delete');

    //Groups
    Route::get('/groups', [GroupController::class, 'index'])->name('groups_index');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups_create');
    Route::post('/groups/store', [GroupController::class, 'store'])->name('groups_store');
    Route::get('/groups/edit/{id}', [GroupController::class, 'edit'])->name('groups_edit');
    Route::put('/groups/update/{id}', [GroupController::class, 'update'])->name('groups_update');
    Route::delete('/groups/delete/{id}', [GroupController::class, 'destroy'])->name('groups_delete');
    // end group

    Route::get('/genres', [GenreController::class, 'index'])->name('genres_index');
    Route::get('/genres/create', [GenreController::class, 'create'])->name('genres_create');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres_store');
    Route::get('/genres/edit/{id}', [GenreController::class, 'edit'])->name('genres_edit');
    Route::put('/genres/update/{id}', [GenreController::class, 'update'])->name('genres_update');
    Route::delete('/genres/delete/{id}', [GenreController::class, 'destroy'])->name('genres_delete');

    // Phong
    Route::get('/story', [StoryController::class, 'index'])->name('admin_storylist');
    Route::get('/story/create', [StoryController::class, 'createBook'])->name('admin_storycreate');
    Route::post('/story/store', [StoryController::class, 'storeBook'])->name('admin_storystore');
    Route::get('/story/{id}', [StoryController::class, 'showBook'])->name('admin_storyshow');
    Route::get('/story/{id}/edit', [StoryController::class, 'editBook'])->name('admin_storyedit');
    Route::put('/story/{id}/update', [StoryController::class, 'updateBook'])->name('admin_storyupdate');
    Route::delete('story/{id}/delete', [StoryController::class, 'destroyBook'])->name('admin_storydestroy');

    //episode
    Route::get('/episode/create/{book_id}', [StoryController::class, 'createEpisode'])->name('admin_episodecreate');
    Route::post('/episode/store', [StoryController::class, 'storeEpisode'])->name('admin_episodestore');
    Route::get('/episodes/{id}/edit', [StoryController::class, 'editEpisode'])->name('admin_episodeedit');
    Route::put('/episodes/{id}', [StoryController::class, 'updateEpisode'])->name('admin_episodeupdate');
    Route::delete('/episode/{id}/delete', [StoryController::class, 'destroyEpisode'])->name('admin_episdestroy');
    //end episode


    //chapter
    Route::get('/chapter/create/{episode_id}', [StoryController::class, 'createChapter'])->name('admin_chaptercreate');
    Route::post('/chapter/store', [StoryController::class, 'storeChapter'])->name('admin_chapterstore');
    Route::get('/chapter/{id}/edit', [StoryController::class, 'editChapter'])->name('admin_chapteredit');
    Route::put('/chapter/{id}', [StoryController::class, 'updateChapter'])->name('admin_chapterupdate');
    Route::delete('/chapter/{id}/delete', [StoryController::class, 'destroyChapter'])->name('admin_chapterdestroy');
    //end chapter

    //duyệt truyện
    Route::get('/books/approval', [BookApprovalController::class, 'index'])->name('books.approval');
    Route::post('/books/approve/{id}', [BookApprovalController::class, 'approve'])->name('books.approve');
    // end duyệt truyện


    Route::resource('/banners', BannerController::class);

    Route::get('/purchase_history', [PurchaseManageController::class, 'index'])->name('ListPurchaseUser');
    Route::get('/purchase_history/{user}', [PurchaseManageController::class, 'showUserPurchasedChapters'])->name('detailPurchaseUser');

    Route::get('/history/{bookId}', [StoryController::class, 'showPublicationHistory'])->name('showPublicationHistory');

    //Contract (Hợp đồng)
    Route::resource('/contracts-manage', adminContractController::class);
    // end phong

    //forum
    Route::get('/thao-luan', [ForumController::class, 'indexadmin'])->name('thao_luan');
    Route::get('/updateforum/{id}/edit', [ForumController::class, 'editforum'])->name('editforum');
    Route::put('/updateforum/{id}/update', [ForumController::class, 'updateadmin'])->name('updateadmin');
    Route::delete('/deleteForum/{id}', [ForumController::class, 'destroy'])->name('deleteforum');

    //Hòa thêm router
    Route::get('/stories/trashed', [StoryController::class, 'trashedStories'])->name('admin_stories_trashed');
    Route::post('/stories/restore/{id}', [StoryController::class, 'restoreStory'])->name('admin_story_restore');
    Route::delete('/stories/forceDelete/{id}', [StoryController::class, 'forceDeleteStory'])->name('admin_story_forceDelete');
    Route::get('/stories/approval', [StoryController::class, 'approvalList'])->name('admin_stories_approval');
    Route::post('/stories/approve/{id}', [StoryController::class, 'approveStory'])->name('admin_story_approve');
    Route::post('/stories/reject/{id}', [StoryController::class, 'rejectStory'])->name('admin_story_reject');
    Route::get('/stories/lich-su-duyet', [StoryController::class, 'ApprovalHistory'])->name('admin_story_approvalhistory');
    // });
    // Báo cáo
    Route::get('/report', [ReportController::class, 'index'])->name('reports.index');
    Route::patch('/reports/{report}/approve', [ReportController::class, 'approve'])->name('reports.approve');
    Route::patch('/reports/{report}/reject', [ReportController::class, 'reject'])->name('reports.reject');
    Route::patch('/reports/{report}/review', [ReportController::class, 'review'])->name('reports.review');
    // end báo cáo

});
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('chaptercomments', ChapterCommentController::class)->except(['create', 'store']);
    Route::get('chaptercomments/{id}/delete', [ChapterCommentController::class, 'delete'])->name('chaptercomments.delete');
    Route::get('chaptercomments/{id}/restore', [ChapterCommentController::class, 'restore'])->name('chaptercomments.restore');
    Route::get('chaptercomments/{id}/destroy', [ChapterCommentController::class, 'destroy'])->name('chaptercomments.destroy');
    Route::resource('bookcomments', AdminBookCommentController::class)->except(['create', 'store']);
    Route::prefix('bookcomments')->group(function () {
        Route::get('{id}/delete', [AdminBookCommentController::class, 'delete'])->name('bookcomments.delete');
        Route::get('{id}/restore', [AdminBookCommentController::class, 'restore'])->name('bookcomments.restore');
        Route::get('{id}/destroy', [AdminBookCommentController::class, 'destroy'])->name('bookcomments.destroy');
    });
    Route::get('/withdraw', [WithdrawRequestController::class, 'index'])->name('withdraw.index');
    Route::get('/withdraw/history', [WithdrawRequestController::class, 'HistoryAmin'])->name('withdraw.history');
    Route::post('/withdraw/{id}/update', [WithdrawRequestController::class, 'update'])->name('withdraw.update');
});
