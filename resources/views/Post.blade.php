@extends('template')
@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>by. faisal in
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
    {!! $post->body !!}
</article>
<a href="/post">back</a>
@endsection
