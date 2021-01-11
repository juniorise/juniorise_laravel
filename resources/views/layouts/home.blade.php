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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
</head>

<style>
    @keyframes noise {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 100% 100%;
        }
    }

    .noise {
        background-image: url(https://theacheng.herokuapp.com/assets/graphics/texture.png) !important;
        animation: noise .5s linear infinite !important;
    }

    .hat-icon {
        bottom: 9px;
        right: 2px;
        transform: matrix(0.87, 0.46, -0.51, 0.88, 0, 0);
    }

    .highlight {
        background-image: url({{ asset('assets/home/brush.svg') }});
    }

    .smart-scroll {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
        background: rgba(255, 255, 255, 1) !important;
    }

    .scrolled-down {
        transform: translateY(-100%);
        transition: all 0.3s ease-in-out;
    }

    .scrolled-up {
        transform: translateY(0);
        transition: all 0.3s ease-in-out;
    }

    .add-shadow {
        filter: drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.1)) !important;
        transition: all .5s ease;
    }

</style>

<body>
    <div id="app" class="bg-white noise">
        <nav class="d-flex justify-content-between p-2 navbar smart-scroll">
            @include('layouts.logo', ["isLight"=>true])
            <div class="d-flex justify-content-end">
                <div class="sign-in-sign-up d-flex">
                    @guest
                        @if (Route::has('login'))
                            <div class="btn align-self-center text-decoration-none">
                                <a class="text-dark" href="#" id="loginBtn">Login</a>
                            </div>
                        @endif
                        @if (Route::has('register'))
                            <div class="text-primary btn border border-primary align-self-center rounded-0 ml-4">
                                <a href="#" id="signUpBtn">Sign up</a>
                            </div>
                        @endif
                    @else
                        <div class="c btn border border-danger align-self-center rounded-0 ml-4">
                            <a class="text-danger" href="#" id="logoutBtn"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#signUpBtn").click(function() {
            $('html, body').animate({
                scrollTop: $("#section-4").offset().top
            }, 250);
        });

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if (scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                } else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                if (!$(document).scrollTop()) {
                    $('.smart-scroll').removeClass('add-shadow');
                } else {
                    $('.smart-scroll').addClass('add-shadow');
                }

                last_scroll_top = scroll_top;
            });
        }

        // window.onbeforeunload = function () {
        //     $('html, body').animate({
        //         scrollTop: 0,
        //     }, 250);
        // }

    </script>
</body>

</html>
