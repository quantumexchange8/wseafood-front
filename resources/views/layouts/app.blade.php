<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">
        @if (App::environment('production') || App::environment('staging'))
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @endif

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
         
        <!-- Template Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

        <!-- IE compatibility -->
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="{{ asset('js/respond.js') }}"></script>
        <![endif]-->

    </head>
    <body class="font-sans antialiased">
        <div style="min-height: 100vh; display: flex; flex-direction: column; background-color: #f7f7f7;">

            @isset($header)
                <header style="background: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 1.5rem;">
                    <div style="max-width: 1280px; margin: 0 auto;">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main style="flex: 1;">
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>

        <!-- Template Scripts -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow-1.3.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.js') }}"></script>
        <script src="{{ asset('assets/js/ajaxchimp.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
        <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3tyin_u6qIdt1Z82yv3mOUcgjaVtRi0"></script> -->
        <!-- <script src="{{ asset('assets/js/map.js') }}"></script> -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
        <script src="{{ asset('assets/js/easing-min.js') }}"></script>
        <!-- <script src="{{ asset('assets/js/particles.min.js') }}"></script> -->
        <!-- <script src="{{ asset('assets/js/particles-app.js') }}"></script> -->
        <!-- <script src="{{ asset('assets/js/youtubebackground.js') }}"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script> -->
        <script src="{{ asset('assets/js/active.js') }}"></script>

    </body>
</html>
