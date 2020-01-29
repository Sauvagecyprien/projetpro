<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{'/img/kitesurfing.png'}}">
  <link rel="icon" type="image/png" href="{{'/img/kitesurfing.png'}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Commentaires
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
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{"/img/sidebar-1.jpg"}}">
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
        <li class="nav-item  ">
          <a class="nav-link" href="{{ '/dashboard' }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="{{ '/com' }}">
            <i class="material-icons">assignment</i>
            <p>Espace Commentaire</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ '/table' }}">
            <i class="material-icons">assignment_ind</i>
            <p>Liste utilisateur</p>
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
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title">Commentaire :</span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#ligne" data-toggle="tab">
                          <i class="material-icons">cloud_done</i> En ligne
                          <div class="ripple-container"></div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#attente" data-toggle="tab">
                          <i class="material-icons">cloud_off</i> En attente
                          <div class="ripple-container"></div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="ligne">
                    <table class="table table-hover">
                      <thead class="">
                      <th>Nom et Prenom :</th>
                      <th>contenu :</th>
                      <th>Etat :</th>
                      <th>Attente :</th>
                      <th>Modifier :</th>
                      <th>Supprimer :</th>

                      </thead>
                      @foreach($coms as $com)
                        <tbody>
                        <form action="" method="post">
                          {{ csrf_field() }}

                          <tr>
                            <td>{{ $com->user->nom }}, {{ $com->user->prenom }} </td>


                            <td>
                              {{ $com->contenu }}
                            </td>
                            <td>
                              {{ $com->etat }}
                            </td>

                            <td><a href="{{ url('/attente/' . $com->id) }}" class="btn btn-warning btn-sm"  rel="tooltip" data-original-title="Mettre en attente"><i class="material-icons">cloud_off</i></a></td>


                            <td><a href="{{ url('/modif/' . $com->id) }}" class="btn btn-info btn-sm" rel="tooltip" data-original-title="Modifier"><i class="material-icons"  >settings_applications</i></a></td>

                            <td><a href="{{ url('/com/' . $com->id) }}" class="btn btn-danger btn-sm" rel="tooltip" data-original-title="Supprimer"><i class="material-icons"  >clear</i></a></td>
                          </tr>
                        </form>
                        </tbody>
                      @endforeach
                    </table>


                  </div>
                  <div class="tab-pane" id="attente">
                    <table class="table table-hover">
                      <thead class="">
                      <th>Nom et Prenom :</th>
                      <th>contenu :</th>
                      <th>Etat :</th>
                      <th>Valider :</th>
                      <th>Modifier :</th>
                      <th>Supprimer :</th>

                      </thead>
                      @foreach($comatts as $comatt)
                        <tbody>
                        <form action="" method="post">
                          {{ csrf_field() }}

                          <tr>
                            <td>{{ $comatt->user->nom }}, {{ $comatt->user->prenom }} </td>


                            <td>
                              {{ $comatt->contenu }}
                            </td>
                            <td>
                              {{ $comatt->etat }}
                            </td>
                            <td>
                              <a href="{{ url('/valider/' . $comatt->id) }}" class="btn btn-success btn-sm" rel="tooltip" data-original-title="Valider"><i class="material-icons">cloud_done</i></a>
                            </td>


                            <td><a href="{{ url('/modif/' . $comatt->id) }}" class="btn btn-info btn-sm" rel="tooltip" data-original-title="Modifier"><i class="material-icons"  >settings_applications</i></a></td>

                            <td><a href="{{ url('/com/' . $comatt->id) }}" class="btn btn-danger btn-sm" rel="tooltip" data-original-title="Supprimer"><i class="material-icons"  >clear</i></a></td>
                          </tr>
                        </form>
                        </tbody>
                      @endforeach
                    </table>


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
