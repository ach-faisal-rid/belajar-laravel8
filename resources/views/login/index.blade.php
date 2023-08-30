@extends('template')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form>

                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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
