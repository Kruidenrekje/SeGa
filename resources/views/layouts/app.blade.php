<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Game Mechanics</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/segaklein.png">
                    </div>
                        <div class="dol-md-7">
                            <div id="custom-search-input">
                                 <div class="input-group col-md-7">
                                    <input type="text" class="  search-query form-control" placeholder="Search for categories or mechanics." />
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                 <span class=" glyphicon glyphicon-search"></span>
                                          </button>
                                        </span>
                                 </div>
                            </div>
                        </div>
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav pull-left">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('myprojects') }}">My Projects</a></li>
                            <li><a href="{{ route('mechanics') }}">Game Mechanics</a></li>
                        @else
                            <li><a href="{{ route('myprojects') }}">My Projects</a></li>
                            <li><a href="{{ route('mechanics') }}">Game Mechanics</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                </div>

                    <!-- Branding Image -->

                </div>

            </div>
        </nav>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
