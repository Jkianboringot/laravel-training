<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::post('/posts/store',[PostController::class,'store'])->name('post.store');

Route::get('/posts/create',[PostController::class,'create'])->name('post.create');

Route::get('/posts/edit/{post}',[PostController::class,'edit'])->name('post.edit');

Route::post('/posts/update/{post}',[PostController::class,'update'])->name('post.update');

Route::post('/posts/delete/{post}',[PostController::class,'destroy'])->name('post.delete');



Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
