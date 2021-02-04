<?php
@include(public_path('img/'));

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('img/stiki.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>UTS I Gede Putu Jaya</title>
</head>

<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/home">JayKuliner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="/home">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/about">Profile Perusahaan</a>
                    <a class="nav-item nav-link" href="/produk">Produk</a>
                    <a class="nav-item nav-link" href="/profile">Tentang Kami</a>
                    <a class="nav-item nav-link" href="/crud/index">CRUD Menu</a>



                    <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                </div>
            </div>
        </nav>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @yield('jumbotron')
        </div>
    </div>

    @yield('content')



</body>

</html>