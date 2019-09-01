<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Bootstrap css --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Styles -->
        <link href="{{ asset('style.css') }}" rel="stylesheet">
        <link href="{{ asset('animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        {{-- favicon --}}
        <link rel="icon" href={{ asset('images/fav-icon.png') }} type="image/x-icon"/>

        {{-- dynamic title --}}
        <title>Loreto High School Limuru | @yield('title')</title>

    </head>
    <body>

        <main>
                @yield('content')
        </main>



        {{-- footer --}}
        <footer class="text-center mb-5 mt-5">
            &copy;<script>document.write(new Date().getFullYear())</script> All Rights Reserved. Designed by <a href="https://www.zalegoinstitute.ac.ke" target="_blank">Zalego</a>
        </footer>
    <script src={{ asset('bootstrap/js/jquery-3.3.1.min.js') }}></script>
    <script src= {{ asset('bootstrap/js/popper.min.js') }}></script>
    <script src= {{ asset('bootstrap/js/bootstrap.min.js') }}></script>
    <script src= {{ asset('wow.min.js') }}></script>
    <script src= {{ asset('main.js') }}></script>
    {{-- initiliase animation --}}
    <script>new WOW().init(); </script>
    </body>
</html>
