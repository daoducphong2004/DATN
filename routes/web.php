<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\USER\UserController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');

        Route::get('home', [UserController::class, 'index']);
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

        Route::get('login', [UserController::class, 'login']);
        Route::get('register', [UserController::class, 'register']);

        Route::get('UserHome', [UserController::class, 'home']);
        Route::get('createTruyen', [UserController::class, 'createTruyen']);
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
    });

// Route::get('home', [UserController::class, 'index']);
// Route::get('gioithieu', [UserController::class, 'gioithieu']);
// Route::get('chuong', [UserController::class, 'chuong']);
// Route::get('vuadang', [UserController::class, 'vuadang']);
// Route::get('thaoluan', [UserController::class, 'thaoluan']);


// Route::get('login', [UserController::class, 'login']);
// Route::get('register', [UserController::class, 'register']);
