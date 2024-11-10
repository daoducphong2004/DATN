<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ChapterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocxController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/chapter/{chapter}/bookmarks', [BookmarkController::class, 'getUserBookmarks']);


Route::post('/read-word-file', [DocxController::class, 'readWordFile'])->name('chapter.readWordFile');