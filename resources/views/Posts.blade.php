@extends('template')
@section('container')
    <h1>apa yang baru ? </h1>
    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    @endforeach
</body>
@endsection
