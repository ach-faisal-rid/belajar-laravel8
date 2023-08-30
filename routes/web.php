<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use illuminate\Support\Fascades\Storage;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => "home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => "about",
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});
