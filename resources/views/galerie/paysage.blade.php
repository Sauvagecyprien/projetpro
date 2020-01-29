<!DOCTYPE HTML>
<html>
<head>
    <title>David&kite</title>
    <meta charset="utf-8" />
    @include('nav/image')
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/galerie/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{ asset('/css/galerie/noscript.css')}}" /></noscript>
</head>

@include('galerie/stylemenu')

<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

@include('galerie/menugalerie')

    <!-- Header -->
    <header id="header">
        <h1><a onclick="openNav()">Menu</a></h1>


    </header>

    <!-- Main -->
    <div id="main">
        <article class="thumb">

            <a href="{{ asset('img/imagemaman/paysages/1.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/1.jpeg')}}"  alt=""/></a>
            <h2>Fredo marguerite</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/2.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/2.jpeg')}}" alt="" /></a>
            <h2>Gilbert montagnet</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/3.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/3.jpeg')}}" alt="" /></a>
            <h2>fredo marguerite </h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/4.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/4.jpeg')}}" alt="" /></a>
            <h2>sylvain de motonoï</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/5.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/5.jpeg')}}" alt="" /></a>
            <h2>David</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/6.jpeg')}}" class="image"><img src="{{ asset('img/imagemaman/paysages/6.jpeg')}}" alt="" /></a>
            <h2>L'équipe</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/7.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/7.jpeg')}}" alt="" /></a>
            <h2>Montage des voiles</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/8.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/8.jpeg')}}" alt="" /></a>
            <h2>Les consignes</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/9.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/9.jpeg')}}" alt="" /></a>
            <h2>Tommy</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/10.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/10.jpeg')}}" alt="" /></a>
            <h2>Tommy</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/11.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/11.jpeg')}}" alt="" /></a>
            <h2>Sed ac elementum arcu</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="{{ asset('img/imagemaman/paysages/12.jpeg')}}" class="image" ><img src="{{ asset('img/imagemaman/paysages/12.jpeg')}}" alt="" /></a>
            <h2>Vehicula id nulla dignissim</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
    </div>



</div>

<!-- Scripts -->
<script src="{{ asset('/js/galerie/jquery.min.js')}}"></script>
<script src="{{ asset('/js/galerie/jquery.poptrox.min.js')}}"></script>
<script src="{{ asset('/js/galerie/browser.min.js')}}"></script>
<script src="{{ asset('/js/galerie/breakpoints.min.js')}}"></script>
<script src="{{ asset('/js/galerie/util.js')}}"></script>
<script src="{{ asset('/js/galerie/main.js')}}"></script>

</body>
</html>
