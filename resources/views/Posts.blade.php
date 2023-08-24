@extends('template')
@section('container')
    <h1>apa yang baru ? {{ $title }} </h1>
    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <small class="text-muted">
            <p>by. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
            <a href="/categories/{{ $posts[0]->category->slug }}"
            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}</small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more</a>
        </div>
    </div>
    @else
        <p class="text-center fs-4">no post found.</p>
    @endif

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-5">
            <h2 class="mb-5">
                <a href="/posts/{{ $post->slug }}"
                class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            {{ $post->body }}
            <a href="/posts/{{ $post->slug }}">read more..</a>
        </article>
    @endforeach
</body>
@endsection
