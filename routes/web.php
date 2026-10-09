<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the web "middleware" group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 投稿一覧ページ
Route::get('/posts', [PostController::class, 'index']);
// 投稿詳細ページ
Route::get('/posts/{id}', [PostController::class, 'show']);

