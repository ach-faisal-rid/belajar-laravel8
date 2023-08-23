<?php

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


Route::get('/post', function () {

    return view('posts', [
        "title" => "Post",
        "posts" => Post::all()
    ]);
});

Route::get('posts/{slug}', function($slug) {
    return view('post', [
        'title' => 'single post',
        'post' => Post::find($slug)
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
