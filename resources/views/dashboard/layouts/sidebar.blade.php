<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="grid" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled {{ Request::is('dashboard/post') ? 'active' : '' }}" href="/dashboard/post">
                <span data-feather="pen-tool" class="align-text-bottom"></span>
                Posts (Disabled for a moment :D)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                <span data-feather="list" class="align-text-bottom"></span>
                Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="/dashboard/about">
                <span data-feather="user" class="align-text-bottom"></span>
                About
                </a>
            </li>
            <hr class="solid">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/homepage') ? 'active' : '' }}" href="/">
                <span data-feather="home" class="align-text-bottom"></span>
                Homepage
                </a>
            </li>
            <hr class="solid">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/logout') ? 'active' : '' }}">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><span data-feather="log-out" class="align-text-bottom"></span> Logout</button>
                    </form>
                </a>
            </li>
        </ul>
    </div>
</nav>