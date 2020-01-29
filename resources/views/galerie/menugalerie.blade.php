

<div id="mySidenav" class="sidenav" style="z-index: 1200; text-decoration: none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="border-bottom: 0px !important;">&times;</a>
    <a href="{{('/index')}}" style="border-bottom: 0px !important;">Accueil</a>
    <a href="{{('galerie')}}" style="border-bottom: 0px !important;">Moniteurs</a>
    <a href="{{('paysage')}}" style="border-bottom: 0px !important;">Paysages</a>
    <a href="{{('/petitcommerce')}}" style="border-bottom: 0px !important;">Les petits commerces</a>
    <a href="{{('/comment')}}" style="border-bottom: 0px !important;">Commentaires</a>
    <br>
    <!-- Right Side Of Navbar -->


    @if (Auth::guest())
        <a href="{{ route('login') }}" style="border-bottom: 0px !important;">Se Connecter</a>
        <a href="{{ route('register') }}" style="border-bottom: 0px !important;">S'inscrire</a>


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


</div>