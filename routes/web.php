<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// alt way of calling view.
// Route::view('/','homepage');

// execute "index" in postcontroller 
Route::get('/', [PostController::class, 'index']);

Route::post('/', [PostController::class, 'store'])->name('posts.store');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
