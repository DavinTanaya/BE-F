<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/create-book', [BookController::class, 'getIndex']);
Route::post('/post-create-book', [BookController::class, 'createBook']);
