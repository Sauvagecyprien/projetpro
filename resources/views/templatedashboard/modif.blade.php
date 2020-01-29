<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{'/img/kitesurfing.png'}}">
    <link rel="icon" type="image/png" href="{{'/img/kitesurfing.png'}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Modifications
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    @include('nav/linkcss')

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="{{"/img/sidebar-1.jpg"}}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="{{ '/' }}" class="simple-text logo-normal">
                David&Kite
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{ '/com' }}">
                        <i class="material-icons">clear</i>
                        <p>Annuler la modification</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">


                <div class="collapse navbar-collapse justify-content-end">

                    @include('nav/login')
                </div>
            </div>
        </nav>
        <!-- End Navbar -->




        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title mt-0">Modification commentaire</h4>
                                <p class="card-category">Vous pouvez y modifier le fichier que vous avez selectionner</p>
                            </div>
                            <div class="card-body">







                                <div class="section section-contacts">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto">

                                            <h4 class="text-center description"></h4>
                                            <form class="contact-form" action="{{ url('/up') }}" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Nom</label>
                                                            <input type="text" class="form-control" value="{{  $coms->user->nom }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Prenom</label>
                                                            <input type="text" class="form-control" value="{{  $coms->user->prenom }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleMessage" class="bmd-label-floating">Contenu</label>
                                                    <textarea type="text" class="form-control" rows="4" id="exampleMessage" name="contenu" >{{  $coms->contenu }}</textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 ml-auto mr-auto text-center">
                                                        <button class="btn btn-primary btn-raised"  value="{{ $coms->id }}" name="id" type="submit">
                                                            Modifier
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @include('nav/footerdash')
        </div>
    </div>
    @include('nav.template')
    @include('nav/jsdash')

</body>

</html>
