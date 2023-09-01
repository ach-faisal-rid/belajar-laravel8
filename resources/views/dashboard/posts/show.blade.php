@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row justify mb-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left"></span>
                back to my posts
            </a>
            <a href="" class="btn btn-warning">
                <span data-feather="edit"></span>
            </a>
            <a href="" class="btn btn-danger">
                <span data-feather="alert-triangle"></span>
            </a>

            <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}"
            alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
