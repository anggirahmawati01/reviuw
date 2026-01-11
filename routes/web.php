<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Detail Kategori (Pantai, Gunung, Air Terjun)
|--------------------------------------------------------------------------
*/
Route::get('/kategori/{slug}', function ($slug) {
    return view('kategori.detail', compact('slug'));
})->name('kategori.detail');

/*
|--------------------------------------------------------------------------
| CRUD Destinations
|--------------------------------------------------------------------------
*/
Route::resource('destinations', DestinationController::class);

/*
|--------------------------------------------------------------------------
| Komentar Destinasi
|--------------------------------------------------------------------------
*/
Route::post('/destinations/{destination}/comments', [CommentController::class, 'store'])
    ->name('comments.store');
