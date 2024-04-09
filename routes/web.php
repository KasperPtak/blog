<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// execute "index" in postcontroller 
Route::get('/', [PostController::class, 'index']);

Route::post('/', [PostController::class, 'store'])->name('posts.store');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
