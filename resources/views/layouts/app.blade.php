<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LSAPP News</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <div id="app">

      <nav class="navbar is-white has-shadow">

        <div class="container">
          <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <img src="{{asset('images/logo.png')}}" alt="">
              </a>
    
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>          
            </div>
    
            <div class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item is-tab">Home</a>
                <a class="navbar-item is-tab">Documentation</a>
                <a class="navbar-item is-tab">About</a>
              </div>
            </div>
    
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-end">
                @if (Auth::guest())
                  <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                  <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                    Hey Alex
                  </a>
                  <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item">
                      Profile
                    </a>
                    <a class="navbar-item">
                      Notifications
                    </a>
                    <a class="navbar-item">
                      Settings
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                      Logout
                    </a>
                  </div>
                </div>  
                @endif
              </div>
            </div>
        </div>
      
      </nav>
      
      @yield('content')
    </div>
  </body>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</html>