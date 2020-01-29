
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
 @include('nav/image')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        David&Kite
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
            <a class="navbar-brand" href="/">
                David&Kite </a>

        </div>

    </div>
</nav>





<div class="page-header header-filter" style="background-image: url('{{ asset('/img/imagemaman/photocorrine/enfant.png')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Se connecter</h4>
                            <div class="social-line">

                            </div>
                        </div>
                       <div style="height: 40px"></div>
                        <div class="card-body">
                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                                </div>
                                <input placeholder="Votre adresse e-mail...." id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe..." required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                                Se connecter
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Mot de passe oublié ?
                            </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  @include('nav.footerdash')
</div>

@include('nav/templateprinc')
</body>

</html>
