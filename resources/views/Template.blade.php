<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog stack| {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">stack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php
                $active = basename($_SERVER['PHP_SELF']);
            ?>
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ?  'active' : "" }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "post") ?  'active' : "" }}" href="/post">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "categories") ?  'active' : "" }}" href="/categories">categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ?  'active' : "" }}" href="/about">About</a>
                </li>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('container')
</div>
</body>
</html>
