@extends('template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">registrer form</h1>
                <div class="form-floating">
                <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="name">
                <label for="name">name</label>
                </div>
                <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="name">
                <label for="username">username</label>
                </div>
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
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
