
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Kit by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    @include('nav/linkcssprinc')
</head>

<body class="login-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ '/' }}">
                David&Kite </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </div>
</nav>





<div class="page-header header-filter" style="background-image: url('{{ asset('/img/kitesurf.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Reset mot de passe</h4>
                            <div class="social-line">

                            </div>
                        </div>
                        <p class="description text-center"></p>

                        <div class="card-body">
    <div style="height: 75px"></div>
                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                                </div>
                                <input placeholder="Votre adresse email...." id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>



                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                                Changer de mot de passe
                            </button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="#">
                            Page d'acceuil
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Galerie
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Espace commentaires
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Tarif
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, fait avec le <i class="material-icons">favorite</i> de
                <a href="#" target="_blank">Cyprien Sauvage</a> pour le meilleur du kite.
            </div>
        </div>
    </footer>
</div>

@include('nav/templateprinc')
</body>

</html>
