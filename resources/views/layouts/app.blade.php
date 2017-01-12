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
                    <div class="logo">
                        <img src="img/mechanistrylogo.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="custom-search-input">
                        {!! Form::open(array('method' =>'GET', 'route' =>'search-results')) !!}
                            <div class="form-group has-feedback">
                                <input class="form-control" type="text" placeholder="States of USA">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                    </div>

        <div class="dol-md-7">
        <div id="custom-search-input">
        
        <!--Deze Form wordt geopend en linkt naar een route, vervolgens haalt hij de keyword uit het tekstvak en submit hij wat in dit tekstvak staat-->
            {!! Form::open(array('method' =>'GET', 'route' =>'search-results')) !!}
            <div class="input-group col-md-7">
            {!!Form::text('keyword', null, array('placeholder'=>'Search for categories or mechanics'))!!}
                  <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">
                  {!!Form::submit('search')!!}
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
                  </span>
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
                            <li><a href="{{ route('categories') }}">Categories</a></li>
                            <li><a href="{{ route('mechanics') }}">Game mechanics</a></li>
                            <li><a href="{{ route('projects') }}">My projects</a></li>

                    </ul>
                    <ul class="nav navbar-nav pull-right">
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>

                    <ul class="nav navbar-nav pull-left">
                        @else

                            <li><a href="{{ route('categories') }}">Categories</a></li>
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
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

    <script> 
        var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

$('#custom-search-input .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
</script>

</body>
</html>
