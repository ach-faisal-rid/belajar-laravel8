@extends('template')

@section('container')
    <h1 class="mb-5 text-center"> {{ $title }} </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/post">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control"
                           placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
             class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title">
                <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                    By.<a href="/post?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{ $posts[0]->author->name }}</a> In. <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"  class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <div class="position-absolute bg-danger p-2 text-white">
                                <a href="/post?category={{ $post->category->slug }}" class="text-white">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            <h2  class="card-title">
                                <a href="/posts/{{$post->slug}}" class="text-decoration-none text-dark">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p>
                                <small class="text-muted">
                                    by.
                                    <a href="/post?author={{ $post->author->username }}"
                                       class="text-decoration-none">
                                        {{ $post->author->name }}
                                    </a> {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    @else
        <p class="text-center fs-4">no post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
