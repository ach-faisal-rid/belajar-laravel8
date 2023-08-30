@extends('template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">registrer form</h1>
                <div class="form-floating">
                <input type="text" class="form-control
                rounded-top @error('name') is-invalid @enderror" name="name"
                id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">name</label>
                @error('name')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">username</label>
                @error('username')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">register</button>
            </form>
            <small class="d-block mt-3">
                you register?
                <a href="/login">login now!</a>
            </small>
            <p class="mt-5 mb-3 text-muted">&copy;2023</p>
        </main>
    </div>
</div>
@endsection
