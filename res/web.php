<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LetterController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/chuongtruyen', 'chuongtruyen')->name('chuongtruyen');
    });



Route::prefix('admin')->group(function () {
    Route::get('/letter', [LetterController::class, 'index'])->name('events_index');
    Route::get('/letter/create', [LetterController::class, 'create'])->name('events_create');
    Route::post('/letter/store', [LetterController::class, 'store'])->name('events_store');
    Route::get('/letter/edit/{id}', [LetterController::class, 'edit'])->name('events_edit');
    Route::put('/letter/update/{id}', [LetterController::class, 'update'])->name('events_update');
    Route::delete('/letter/delete/{id}', [LetterController::class, 'delete'])->name('events_delete');
});


