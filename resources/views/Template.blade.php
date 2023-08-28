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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul  class="navbar-nav">
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
            </ul>
            <ul class="navbar-nav ms-auto">
                <a href="/login" class="nav-link">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Login
                </a>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('container')
</div>
</body>
</html>
