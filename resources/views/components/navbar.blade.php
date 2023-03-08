<nav class="navbar navbar-expand-lg p-4">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">O I K U</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="/" class="nav-link">Contact</a></li>
        </ul>
        <div class="navbar-nav">
            @auth
            <div class="dropdown">
                <a href="/" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                    <li><a href="logout" class="dropdown-item">Logout</a></li>
                </ul>
            </div>
            @endauth
            @guest
                <a href="/login" class="nav-link">Login</a>
                <a href="/register" class="nav-link">Register</a>
            @endguest
        </div>
    </div>
</nav>