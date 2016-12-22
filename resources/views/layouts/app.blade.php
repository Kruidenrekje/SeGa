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
                <div class="col-md-12">
                    <div class="name">
                        <p>Mechanistry</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="custom-search-input">
                        {!! Form::open(array('method' =>'GET', 'route' =>'search-results')) !!}
                            <div class="form-group has-feedback">
    <input type="text" placeholder="Search for mechanics..." class="form-control" id="inputSuccess2"/>
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
</div>
                    </div>
                </div>
            </div>
                        {!!Form::close()!!}

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
                            <li><a href="{{ route('categories') }}">Home</a></li>
                            <li><a href="{{ route('mechanics') }}">Game mechanics</a></li>
                            <li><a href="{{ route('projects') }}">My projects</a></li>

                    </ul>
                    <ul class="nav navbar-nav pull-right">
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>

                    <ul class="nav navbar-nav pull-left">
                        @else

                            <li><a href="{{ route('categories') }}">Home</a></li>
                            <li><a href="{{ route('mechanics') }}">Game mechanics</a></li>
                            <li><a href="{{ route('projects') }}">My projects</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
                            </li>
                    </ul>
                            </li>
                    </ul>
                    </ul>
                        @endif

                </div>

                </div>
            </div>
        </nav>
        <footer>
            <p>Copyright by Serious Gaming.</p>
        </footer>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
