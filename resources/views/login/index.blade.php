@extends('template')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <div><i class="bi bi-bug"></i>
                <strong>success </strong>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div><i class="bi bi-cup-hot-fill"></i>
                <strong>error </strong>{{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-block mt-3">
                not register?
                <a href="/register">register now!</a>
            </small>
            <p class="mt-5 mb-3 text-muted">&copy;2023</p>
        </main>
    </div>
</div>
@endsection
