<!doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-dark">

    <a class="navbar-brand text-white" href="">
        Home
    </a>

    <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    </ul>
  </nav>

<div class="row">

    <div class="col-md-2 bg-light">
         <a href="{{route('slider.index')}}" class="nav-link text-muted"> <i class="fas fa-users"></i> &nbsp; Slider</a>
    </div>

    <div class="col-md-10">
      <div class="container">
         @yield('content')
      </div>
    </div>
</div>



    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
