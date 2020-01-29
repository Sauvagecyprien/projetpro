<!-- Right Side Of Navbar -->


<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li class="nav-item uk-button-text navdecypi"><a href="{{ route('login') }}" class="nav-link">Se Connecter</a></li>
        <li class="nav-item uk-button-text navdecypi"><a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>


    @elseif( Auth::user()->role === 'Admin')

        <li class="nav-item dropdown">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>{{ Auth::user()->nom }}<i class="material-icons">
                    arrow_drop_down</i>

                <p class="d-lg-none d-md-block">
                    Account
                </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item" style="height: 100%">    Déconnexion
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{'/dashboard'}}" class="dropdown-item" style="height: 100%">    Dashboard
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>

        @else
        <li class="nav-item dropdown">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>{{ Auth::user()->nom }}<i class="material-icons">
                    arrow_drop_down
                </i>
                <p class="d-lg-none d-md-block">
                    Account
                </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item" style="height: 100%">    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
    @endif
</ul>

