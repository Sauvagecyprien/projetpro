
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{'/img/kitesurfing.png'}}">
  <link rel="icon" type="image/png" href="{{'/img/kitesurfing.png'}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Utilisateurs
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  @include('nav/linkcss')
</head>

<body class="">
<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="{{'/'}}" class="simple-text logo-normal">
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
        <li class="nav-item">
          <a class="nav-link" href="{{ '/com' }}">
            <i class="material-icons">assignment</i>
            <p>Espace Commentaire</p>
          </a>
        </li>
        <li class="nav-item active">
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

          <ul class="navbar-nav">

            @include('nav/login')
          </ul>
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
                <h4 class="card-title mt-0">Tableau utilisateur</h4>
                <p class="card-category">Vous pouvez y attribuer des Rôles ou les soustraires</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                    <th>ID :</th>
                    <th>Nom :</th>
                    <th>Prenom :</th>
                    <th>E-mail :</th>
                    <th>User :</th>
                    <th>Admin :</th>
                    <th></th>
                    <th></th>

                    </thead>
                    @foreach($users as $user)
                    <tbody>
                    <form action="{{url('/assign/' . $user->id)}} " method="post">
                      {{ csrf_field() }}

                    <tr>
                      <td>{{ $user->id }} </td>


                      <td>
                        {{ $user->nom }}
                      </td>
                      <td>
                        {{ $user->prenom }}
                      </td>
                      <td>
                        {{ $user->email }}
                      </td>
                      <td>

                        <div class="form-check">
                          <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="role1" value="User"  @if($user->role == 'User')checked @endif>
                            <span class="circle">
                    <span class="check"></span>
                  </span>
                          </label>
                        </div>

                      </td>
                      <td>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="role1" value="Admin" @if($user->role == 'Admin')checked @endif>
                            <span class="circle">
                    <span class="check"></span>
                  </span>
                          </label>
                        </div>


                      </td>
                      <td><button type="submit" class="btn btn-success btn-sm">
                          <i class="material-icons">verified_user</i> Assigner <span class="glyphicon glyphicon-save" aria-hidden="true"></span>


                        </button>
                      </td>
                      <td> <td><a href="{{ url('/tables/' . $user->id) }}" class="btn btn-primary btn-sm"><i class="material-icons"  >clear</i> supprimer</a></td></td>
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
      </div>
    </div>

      @include('nav.footerdash')
  </div>
</div>

@include('nav/template')
@include('nav/jsdash')
</body>

</html>
