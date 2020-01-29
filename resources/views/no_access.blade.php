
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    @include('nav/image')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Page 403
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
            <a class="navbar-brand" href="{{'/'}}">
                David&Kite </a>
        </div>

    </div>
</nav>





<div class="page-header header-filter" style="background-image: url('{{ asset('/img/kitesurf.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Page 403</h4>
                            <div class="social-line">
                                <p>Vous n'avez pas les droits a cette page</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div style="height: 65px"></div>


                           <h4 style="text-align: center" class="text-danger">Vous avez essayer de vous connecter à une page ou vous n'avez pas les droits.</h4>



                        </div>
                        <div class="footer text-center ">
                            <a href="{{'/'}}" class="btn btn-primary btn-round" style="margin-bottom: 20px">
                                <i class="material-icons" >sync</i> revenir a l'accueil</a>


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
