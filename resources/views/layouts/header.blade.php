 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand bg-dark navbar-light border-bottom">
    <ul class="navbar-nav">
        <a href="{{ route('jokes.index') }}" class="ml-1 my-0">
            <img src="{{ asset('/img/logo.png') }}" width="33" class="float-left"><h3 class="ml-2 my-0 float-left text-white">Jokes</h3>
        </a> 
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @auth
                <a class="text-white nav-user mr-1" data-toggle="dropdown" href="#">
                    <i class="fa fa-user"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">
                        {{ auth()->user()->name }}
                        <br>
                        {{ auth()->user()->email }}
                    </span>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('profile.index') }}" class="dropdown-item dropdown-footer">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer">Logout</a>
                </div>
            @else
                <a class="nav-link d-inline-block text-white" href="{{ route('login') }}">
                    Login
                </a>

                <a class="nav-link d-inline-block text-white" href="{{ route('register') }}">
                    Register
                </a>
            @endauth
        </li>
    </ul>
</nav>