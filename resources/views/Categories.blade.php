@extends('template')

@section('container')
<h1>Post Categories</h1>
@foreach ($categories as $category)

    <div class="col-md-4">
        <div class="card">
            <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500/?{{ $category->name }}"
                    class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay
                    d-flex align-items-center p-0">
                        <h5 class="card-title"
                        style="background-color: rgb(255, 0, 0);">
                            {{ $category->name }}
                        </h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

@endforeach
@endsection
