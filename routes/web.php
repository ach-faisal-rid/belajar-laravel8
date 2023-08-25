<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
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

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => "categories",
        'posts' => $category->posts->load('author', 'category'),
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Posts by author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
Route::get('/welcome', function () {
    return view('welcome');
});
