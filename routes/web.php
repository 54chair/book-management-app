<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
