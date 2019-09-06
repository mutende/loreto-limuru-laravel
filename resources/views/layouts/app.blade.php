<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Bootstrap css --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Styles -->
        <link href="{{ secure_asset('style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        {{-- favicon --}}
        <link rel="icon" href={{ secure_asset('images/fav-icon.png') }} type="image/x-icon"/>

        {{-- dynamic title --}}
        <title>Loreto High School Limuru | @yield('title')</title>
</head>
<body>


    {{-- mynav --}}
<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar bg-white mb-5">
          <div class="container">
            <a class="navbar-brand absolute" href="index.php"> <img src="images/fav-icon.png" height="50" width="50" class="img mr-2" alt=" "><strong> Loreto High School Limuru</strong>
            </a></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav mx-auto">
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('academics') }}">Academics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('departments') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Portal</a>
                        </li>
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else

                <li class="nav-item mt-3">
                        <a class="nav-link disabled"> <i class="fa fa-user mr-3" aria-hidden="true"></i>{{ Auth::user()->name }}</a>
                    </li>
                    

                    <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                  @csrf
                                  <br>
                                  <button class="btn btn-group-sm btn-outline-danger mt-1 ml-5" type="submit">logout</button>
                              </form>
                            </li>
                @endguest
              </ul>
            </div>
          </div>
        </nav>
      </header>
{{-- end nav --}}
<br><br>

        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>
    {{-- footer --}}
    <footer class="text-center mb-5 mt-5 fixed-bottom">
            &copy;<script>document.write(new Date().getFullYear())</script> All Rights Reserved. Designed by <a href="https://www.zalegoinstitute.ac.ke" target="_blank">Zalego</a>
        </footer>
        <script src={{ secure_asset('bootstrap/js/jquery-3.3.1.min.js') }}></script>
        <script src= {{ secure_asset('bootstrap/js/popper.min.js') }}></script>
        <script src= {{ secure_asset('bootstrap/js/bootstrap.min.js') }}></script>
</body>
</html>
