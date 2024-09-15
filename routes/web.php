<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'posts']);
    Route::get('/{id}', [PostController::class, 'post']);
});

