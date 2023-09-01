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
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">
                    <i class="bi bi-layout-wtf"></i>
                    my dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-right"></i>
                            logout
                        </button>
                    </form>
                </li>
            </li>
            @else
            <a href="/login" class="nav-link {{ ($active === "login") ?  'active' : "" }}">
                <i class="bi bi-box-arrow-in-right"></i>
                Login
            </a>
            @endauth
            </ul>
        </div>
    </div>
</nav>
