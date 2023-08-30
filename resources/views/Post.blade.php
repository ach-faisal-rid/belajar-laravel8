@extends('template')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>by. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}"
            alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/post">back</a>
        </div>
    </div>
</div>

@endsection
