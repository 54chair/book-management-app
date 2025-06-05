<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

Route::get('/book/search', [BookController::class, 'search'])->name('book.search');
Route::get('/book/index', [BookController::class, 'index'])->name('book.index');
Route::get('/book/show/{id}', [BookController::class, 'show'])->name('book.show');
