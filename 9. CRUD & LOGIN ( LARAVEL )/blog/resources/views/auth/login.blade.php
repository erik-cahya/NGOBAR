<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login Account JayKuliner</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32"
        type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16"
        type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/safari-pinned-tab.svg"
        color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.6/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>











    {{-- ------------------------------------------------------------------------------------------------------ Form Login --}}
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        {{-- title --}}
        <div class="text-center mb-4 ">
            <h1 class="font-weight-bolder mb-3"> Jay Kuliner</h1>
            <h3 class="h4 mb-3 font-weight-normal">Login Now</h3>
        </div>
        {{-- title end --}}





        <div class="form-label-group">

            <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="
                {{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email"
                autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="email">Email address</label>
        </div>




        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="inputPassword">Password</label>
        </div>







        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        {{-- Register --}}
        <div class="mt-3">
            Don't have an account ?
            <a href="{{route('register')}}"> Register </a>
        </div>

        <p class="mt-5 mb-3 text-muted text-center">&copy;2021</p>
    </form>



</body>

</html>