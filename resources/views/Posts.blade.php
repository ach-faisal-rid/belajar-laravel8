@extends('template')
@section('container')
    <h1>apa yang baru ? </h1>
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
