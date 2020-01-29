<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    @include('nav/image')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        blog
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    @include('nav/linkcssprinc')
</head>

<body class="landing-page sidebar-collapse">
@include('nav/nav')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/imagekite/coucherdesoleil3.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenue dans l'espace blog</h1>
                <h4>Vous pouvez y publier des commentaires une fois connecté, merci de respecter autrui.</h4>
                <br>
                <!-- Authentication Links -->
                @if (Auth::guest())

                @else
                    <button class="btn btn-danger btn-raised btn-lg" data-toggle="modal" data-target="#myModal">
                        <i class="material-icons">library_books</i> Poster un commentaire
                    </button>
                @endif


            </div>
        </div>
    </div>
</div>



@if (Auth::guest())
@else
    <!-- Classic Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Poster un commentaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="contact-form" action="{{ url('/insert')}}" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Votre message</label>
                            <textarea type="text" class="form-control" rows="4" id="exampleMessage" name="contenu"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto text-center">
                                <button class="btn btn-primary btn-raised" type="submit">
                                    Envoyer le message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
@endif





<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Les commentaires</h2>
            <div class="team">
                <div class="row">

                    <style>

                        .yolo {
                            /* La transition s'applique à la fois sur la largeur et la hauteur, avec une durée d'une seconde. */
                            -webkit-transition: all 1s ease; /* Safari et Chrome */
                            transition: all 1s ease;
                        }
                        .yolo:hover{
                            /* L'image est grossie de 25% quand tu met 1.05*/
                            -webkit-transform:scale(1.15); /* Safari et Chrome */
                            transform:scale(1.15);
                            z-index: 1200;

                        }

                    </style>

                    @foreach($commentaires as $commentaire)
                        <div class="col-md-3 card card-raised card-carousel yolo">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">

                                    </div>
                                    <h4 class="card-title">{{$commentaire->user->nom}}
                                        <br>
                                        <small class="card-description text-muted">{{$commentaire->user->prenom}}</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">{{$commentaire->contenu}}</p>
                                    </div>
                                    <div class="card-footer justify-content-center">



                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach




                </div>
            </div>
        </div>

    </div>
</div>
@include('nav/footerprinc')
@include('nav/templateprinc')


</body>

</html>
