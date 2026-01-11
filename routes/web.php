<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CommentController;

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD Destinations
Route::resource('destinations', DestinationController::class);

// Komentar Destinasi
Route::post('/destinations/{destination}/comments', [CommentController::class, 'store'])
    ->name('comments.store');
