<nav class="navbar navbar-expand-lg" style="background-color: #4169E1; color:white">
    <div class="container">
        <a class="navbar-brand" style="color:inherit" href="/">
            <img src="{{asset('img/ya-removebg-preview.png')}}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" style="color: inherit;" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/presensi/masuk') ? 'active' : '' }}" style="color: inherit;" href="/presensi/masuk">Presensi</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: inherit;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu">
                        @can('dashboard')
                        <li>
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2"></i> Dashboard</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endcan
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right" style="color: inherit;"></i>  Login</a>
                </li>
                @endauth
            </ul>            
        </div>
    </div>
</nav>