<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Juniorise') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
</head>

<style>
    .hat-icon {
        bottom:9px;
        right:2px;
        transform: matrix(0.87, 0.46, -0.51, 0.88, 0, 0);
    }
    .highlight {
        background-image: url({{ asset('assets/home/brush.svg')}});
    }
</style>

<body>
    <div id="app">
        <nav class="d-flex justify-content-between p-2">
            @include('layouts.logo', ["isLight"=>true])
            <div class="d-flex justify-content-end">
                <div class="sign-in-sign-up d-flex">
                        <a class="text-dark" href="#" id="loginBtn">Login</a>
                    </div>
        </main>
    </div>
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#loginBtn").click(function() {
            $('html, body').animate({
                scrollTop: $("#section-4").offset().top
            }, 250);
        });
        window.onbeforeunload = function () {
            $('html, body').animate({
                scrollTop: 0,
            }, 250);
        }
    </script>
</body>
</html>
