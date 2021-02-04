<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Register Account JakKuliner</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
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
    <link href="https://getbootstrap.com/docs/4.6/examples/checkout/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">

            <h1 class="font-weight-bolder mb-3"> Jay Kuliner</h1>
            <h3 class="h4 mb-3 font-weight-normal">Register Now</h3>

        </div>

        <div class="row">






            <div class="mx-auto col-8">


                <h4 class="mb-3">Register Your Account</h4>













                <form class="needs-validation" method="post" action="{{ route('register') }}">
                    @csrf



                    <div class="mb-3">
                        <label for="name">{{ __('Name') }}</label>

                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Input Your Name" value="{{ old('name') }}" required autocomplete="name"
                            name="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>







                    <div class="mb-3">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="Input Your Email" value="{{ old('email') }}" required
                            autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>







                    <div class="mb-3">
                        <label for="password">{{ __('Password') }}</label>

                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Input Your Password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="mb-3">

                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        <input type="password" class="form-control" id="password-confirm"
                            placeholder="Input Your Password" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>






                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register My Account</button>
                    {{-- Register --}}
                    <div class="mt-3">
                        Have an account ?
                        <a href="{{route('login')}}"> Login </a>
                    </div>
                </form>


            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy;2021</p>
        </footer>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


    <script src="form-validation.js"></script>
</body>

</html>