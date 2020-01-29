<!DOCTYPE HTML>
<html>
<head>
	<title>David&Kite</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('/css/main.css')}}" />
	<link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css')}}" />
	<noscript><link rel="stylesheet" href="{{ asset('/css/noscript.css')}}" /></noscript>
	@include('nav/image')
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>


</head>

<body class="landing is-preload">
<style>
	body.landing #page-wrapper{
		background-image: url("{{ asset('img/imagemaman/photocorrine/kitesurf.jpg')}}") !important;
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/saut.png')}}");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/saut.png')}}");
		background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('img/imagemaman/photocorrine/saut.png')}}");
	}
	h2{
		color: #fff !important;
	}

	a:hover{
		color: #fff;
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
			<h2 style=" color: #fff ">David&Kite</h2>
			<p>La meilleur école de kite de maurice.</p>

		</div>
		<a href="#one" class="more scrolly" style="text-decoration: none">Je découvre</a>
	</section>


	<!-- One -->
	<section id="one" class="wrapper style1 special">
		<div class="inner">
			<header class="major">
				<h2>Nos tarifs selon votre formule</h2>
				<p>Et oui, comme vous pouvez le voir nous adaptons nos tarifs selon vos besoin. <br>
					En effet si vous êtes un expert accompli mais que vous souhaitez louer un bateau ce club est fait pour vous. </p>
			</header>
			<ul style="list-style: none;display: flex; justify-content: space-between" class="row">

				<li ><p>Novice</p><span ><i class="material-icons">star</i></span></li>
				<li  ><p>Supervision</p><span ><i class="material-icons">star</i> <i class="material-icons" >star</i></span></li>
				<li  ><p>Location bateau</p><span class=" major  " > <i class="material-icons" >star</i> <i class="material-icons" >star</i> <i class="material-icons" >star</i></span></li>

			</ul>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper alt style2">
		<section class="spotlight">
			<div class="image"><img src="{{ asset('img/imagemaman/moniteurs/moniteur2.jpeg')}}" alt="" /></div><div class="content">
				<h2>Venez decouvrir nos super moniteurs </h2>
				<p>Une petite présentation de nos moniteurs, qui seront toujours prêt à vous faire voyager sur une planche de Kite si le temps le permet.</p>
				<a href="{{('/galerie')}}" class="button fit test" style="text-decoration: none">Découvrir</a>
			</div>
		</section>
		<section class="spotlight">
			<div class="image"><img src="{{ asset('img/imagemaman/bouffe/bolrenv.jpeg')}}" alt="" /></div><div class="content">
				<h2>une petite faim ?</h2>
				<p>Vous y trouverez des repas typiquement mauricien et aussi des petits événements proposés par le club de Kitesurf.</p>
				<a href="{{('/petitcommerce')}}" class="button fit" style="text-decoration: none">Découvrir</a>
			</div>
		</section>
		<section class="spotlight">
			<div class="image"><img src="{{ asset('img/imagemaman/paysages/couchersol.jpeg')}}" alt="" /></div><div class="content">
				<h2>Un paysage de rêve pour réaliser votre passion</h2>
				<p>Vous trouverez ici les photos et vidéos de nos internautes pour le plaisir des yeux. </p>
				<a href="{{('/paysage')}}" class="button fit" style="text-decoration: none">Découvrir</a>
			</div>
		</section>
	</section>



	<!-- CTA -->
	<section id="cta" class="wrapper style2">
		<div class="inner">
			<header>
				<h2> donner votre avis</h2>
				<p> Vous avez la possibilité de poster un commentaire sur le
				ressenti de votre sejour à condition d'être connecté</p>
			</header>
			<ul class="actions stacked">
				<li style="height: 20px"></li>
				<li><a href="{{('/comment')}}" class="button fit primary" style="text-decoration: none">Commentaire</a></li>
			</ul>
		</div>
	</section>

	@include('include/footer')
</body>
</html>