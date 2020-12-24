<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\CommentsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [PostsController::class,'index']);

Auth::routes();

Route::get('/home', [PostsController::class,'index']);


Route::get('/users/edit', [UsersController::class,'edit']);
Route::post('/users/update', [UsersController::class,'update']);
Route::get('/users/{user_id}', [UsersController::class,'show']);

// 投稿新規画面
Route::get('/posts/new', [PostsController::class,'new'])->name('new');

// 投稿新規処理
Route::post('/posts',[PostsController::class,'store']);

Route::get('/postsdelete/{post_id}', [PostsController::class,'destroy']);

//いいね処理
Route::get('/posts/{post_id}/likes', [LikesController::class,'store']);

//いいね取消処理
Route::get('/likes/{like_id}', [LikesController::class,'destroy']);

//コメント投稿処理
Route::post('/posts/{comment_id}/comments',[CommentsController::class,'store']);

//コメント取消処理
Route::get('/comments/{comment_id}', [CommentsController::class,'destroy']);
