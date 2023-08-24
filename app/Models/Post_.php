<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
