<ul>
    <h1 style="text-align: center">@if (Auth::guest()) @else {{ Auth::user()->prenom }} @endif</h1>
    <li><a href="{{('/index')}}" >Accueil</a></li>
    <li><a href="{{('galerie')}}">Moniteurs</a></li>
    <li><a href="{{('paysage')}}">Paysages</a></li>
    <li><a href="{{('/petitcommerce')}}">Les petits commerces</a></li>
    <li><a href="{{('/comment')}}">Commentaires</a></li>

    <li style="height: 80px"></li>
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li ><a href="{{ route('login') }}" class="nav-link">Se Connecter</a></li>
        <li><a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
        <li></li>


    @elseif( Auth::user()->role === 'Admin')

        <li>	<a href="{{'/dashboard'}}" class="dropdown-item" style="height: 100%">    Dashboard
            </a>
        </li>
        <li>	<a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item" style="height: 100%">    Déconnexion
            </a></li>
    <li></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    @else
        <li>	<a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item" style="height: 100%">    Déconnexion
            </a></li>
        <li></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif
</ul>