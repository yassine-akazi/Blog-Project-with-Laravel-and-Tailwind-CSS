<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Post;


Route::get('/', function () {
    $posts = Post::all();

    return view('home' , ['posts' => $posts]);
});

Route::post('/register' , [UserController::class , 'register']);
Route::post('/logout' , [UserController::class , 'logout']);
Route::post('/login' , [UserController::class , 'login']);


//blog post

Route::post('/create_post' , [PostController::class , 'createPost']);


Route::get('/edit/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete/{post}', [PostController::class, 'deletePost']);


