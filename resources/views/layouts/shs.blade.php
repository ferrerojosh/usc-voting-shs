<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'SHS') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="shs-voting">
      <header>
        <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
          <!-- Navbar content -->
          <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">USC SHS</a>

            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="navbar-nav mr-auto">
                &nbsp;
              </ul>
              <ul class="navbar-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @else
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle" id="user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->username }}
                  </a>
                  <div class="navbar-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="user-menu">
                    <h6 class="dropdown-header">Characters</h6>
                    <a href="#" class="dropdown-item" type="button"><i class="fa fa-user" aria-hidden="true"></i> Manage Characters</a>
                    <a href="#" class="dropdown-item" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Create Character</a>
                    <h6 class="dropdown-header">Account</h6>
                    <a href="#" class="dropdown-item" type="button"><i class="fa fa-gear" aria-hidden="true"></i> Settings</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" type="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
        <div class="jumbotron">
          <div class="d-flex justify-content-center">
            <div class="p-2">
              <img class="img-fluid" src="{{ asset('img/usc.png') }}">
            </div>
            <div class="p-2">
              <div class="align-middle">
              <h1>University of San Carlos</h1>
              <p class="lead">Senior High School</p>
              </div>
            </div>
          </div>
        </div>
      </header>

      <main>
        @yield('content')
      </main>

      <footer class="footer">
        <div class="container">
        <div class="row">
          <div class="col">
            <img width="64" height="64" src="{{ asset('img/usc.png') }}">
            <img src="{{ asset('img/code.png') }}" width="64" height="64" alt="">
          </div>
          <div class="col text-right">
            <p>Made by <a href="https://twitter.com/ferrerojoshy">@ferrerojoshy</a> with love and wasted school time.</p>
            <p>Copyright &copy; 2017 <a href="http://usc.edu.ph">University of San Carlos</a> | <a href="http://codeusc.com/">Computer Driven Enthusiasts</a></p>
          </div>
        </div>
      </div>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>