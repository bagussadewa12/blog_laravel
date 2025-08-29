<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

// List semua post yang sudah publish
Route::get('/posts', [PostController::class, 'index']);

// Detail post berdasarkan slug
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
