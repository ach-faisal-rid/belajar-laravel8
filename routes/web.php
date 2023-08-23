<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Fascades\Storage;

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


Route::get('/blog', function () {
    $blog_post = [
        [
            'title' => 'sapa',
            'slug' => 'sapa',
            'author' => 'budi',
            'body' => 'hallo apa kabar ?',
        ],
        [
            'title' => 'balas',
            'slug' => 'balas',
            'author' => 'dimas',
            'body' => 'baik, wkwk',
        ],
        [
            'title' => 'konfirmasi',
            'slug' => 'konfirmasi',
            'author' => 'firman',
            'body' => 'jam sekolah mau mulai nih ?',
        ],

    ];
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_post
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_post = [
        [
            'title' => 'sapa',
            'slug' => 'sapa',
            'author' => 'budi',
            'body' => 'hallo apa kabar ?',
        ],
        [
            'title' => 'balas',
            'slug' => 'balas',
            'author' => 'dimas',
            'body' => 'baik, wkwk',
        ],
        [
            'title' => 'konfirmasi',
            'slug' => 'konfirmasi',
            'author' => 'firman',
            'body' => 'jam sekolah mau mulai nih ?',
        ],
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if($post['slug']=== $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'single post',
        'post' => $new_post
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
