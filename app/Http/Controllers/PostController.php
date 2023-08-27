<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            "title" => "all Posts",
            'active' => "post",
            "posts" => Post::latest()
            ->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'title' => 'single post',
            'active' => "post",
            'post' => $post
        ]);
    }
}
