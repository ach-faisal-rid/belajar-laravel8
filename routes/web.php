<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use illuminate\Support\Fascades\Storage;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "faisal",
        "email" => "thinkBear@gmail.com",
        "image" => "faisal.jpg",
    ]);
});


Route::get('/post', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/welcome', function () {
    return view('welcome');
});
