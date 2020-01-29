<!DOCTYPE HTML>
<html>
<head>
    <title>David&Kite</title>
    <meta charset="utf-8" />
    @include('nav/image')
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css')}}" />
    <noscript><link rel="stylesheet" href="{{ asset('/css/noscript.css')}}" /></noscript>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body class="landing is-preload">
<style>
    body.landing #page-wrapper{
        background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/kitedrone.png')}}") !important;
        background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/kitedrone.png')}}");
        background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/kitedrone.png')}}");
        background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/kitedrone.png')}}");



    }
</style>
<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="{{'/'}}" style="color: #fff; text-decoration: none ">David&Kite</a></h1>
        <nav id="nav">
            <ul>

                <li class="special">
                    <a href="#menu" class="menuToggle" style="text-decoration: none"><span>Menu</span></a>
                    <div id="menu">
                        @include('nav/menu')


                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2 style=" color: #fff ">Les commentaires</h2>
            <p>Vous trouverez ici les commentaires des personnes</p>

        </div>
        <a href="#one" class="more scrolly" style="text-decoration: none">Tout lire</a>
    </section>



    <!-- One -->


    <section class="wrapper style5" id="one">
        <div class="inner">
            <!-- Authentication Links -->
            @if (Auth::guest())

            @else
                <style>
                    .modal a{
                        text-decoration: none !important;
                        border-bottom: none;
                    }
                </style>
                <!-- Link to open the modal -->
                <div style="display: flex; justify-content: center">
                    <a class="button fit primary" href="#modal-sectionsposter" uk-toggle style="text-decoration: none">Poster un commentaire</a>

                </div>


                <form id="modal-sectionsposter" uk-modal action="{{ url('/insert')}}" method="POST">
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h2 class="uk-modal-title">Votre message</h2>
                        </div>
                        <div class="uk-modal-body">

                            <div class="uk-margin">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <textarea class="uk-textarea" rows="5" placeholder="Textarea" name="contenu"></textarea>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Fermer</button>
                            <button class="uk-button uk-button-primary" type="submit">Publier</button>
                        </div>
                    </div>

                </form>




                <!-- Modal HTML embedded directly into document -->
                <div id="ex1" class="modal" style="color: black">
                    <form class="contact-form" action="{{ url('/insert')}}" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating" style="color: black">Votre message</label>
                            <textarea type="text" rows="4" name="contenu" id="demo-message"></textarea>
                        </div>
                        <div style="display: flex; justify-content: center; margin-top: 10px">
                            <div class="col-10">
                                <button class="button fit primary" type="submit">
                                    Envoyer le message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif










            @foreach($commentaires as $commentaire)

                <ul class="uk-comment-list" style="box-shadow: 0 5px 15px rgba(0,0,0,0.08);" id="{{$commentaire->id}}">
                    <li style="padding-right: 10px">
                        <article class="uk-comment uk-visible-toggle" tabindex="-1" >
                            <header class="uk-comment-header uk-position-relative">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-comment-avatar" src="{{ asset('img/user.jpg')}}" width="80" height="80" alt="" style="border-radius: 50%">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-comment-title uk-margin-remove ">{{$commentaire->user->nom}}, {{$commentaire->user->prenom}}</h4>
                                        <p class="uk-comment-meta " style="margin-top: 10px">{{ \Carbon\Carbon::parse($commentaire->updated_at)->format('d/m/Y')}}</p>
                                    </div>
                                    <div class="uk-position-top-right uk-position-small"><a class="uk-link-muted" href="#modal-sections" uk-toggle>répondre</a></div>

                                </div>
                            </header>
                            <div class="uk-comment-body">
                                <p>{{$commentaire->contenu}}</p>
                            </div>
                        </article>

                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-parent">
                                <a href="#" >Voir les avis</a>
                                <ul class="uk-nav-sub">










                                    @foreach($enfants as $enfant)
                                        <li style="margin-top: 10px">

                                            <article class="uk-comment uk-comment-primary uk-visible-toggle" tabindex="-1" >
                                                <header class="uk-comment-header uk-position-relative">
                                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-comment-avatar" src="{{ asset('img/avatar.jpg')}}" width="80" height="80" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{$enfant->user->nom}}, {{$enfant->user->prenom}}</a></h4>
                                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">{{$enfant->created_at}}</a></p>
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-comment-body">
                                                    <p>{{$enfant->contenu}}</p>
                                                </div>
                                            </article>

                                        </li>
                                    @endforeach

                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>

                <div id="modal-sections" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h2 class="uk-modal-title">répondre au commentaire</h2>
                        </div>
                        <div class="uk-modal-body">

                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
                            </div>                    </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <button class="uk-button uk-button-primary" type="button">Save</button>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>
    </section>









@include('include/footer')
</body>
</html>