<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $post = Post::latest();

        if(request('search')) {
            $post->where('title', 'like', '%'.
            request('search'). '%')
            ->orWhere('body', 'like', '%'.
             request('search'). '%');
         }

        return view('posts', [
            "title" => "all Posts",
            'active' => "post",
            "posts" => $post->get()
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
