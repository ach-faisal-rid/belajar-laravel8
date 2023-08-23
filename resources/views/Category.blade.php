@extends('template')
@section('container')
    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
        <h2 class="mb-5">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        {{ $post->body }}
    @endforeach
</body>
@endsection
