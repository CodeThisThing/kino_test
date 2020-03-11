<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_page_style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

    <title>Kino_test</title>
</head>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
        <a class="navbar-brand" href="/"><strong>Kino-test</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/favorite">Олюблене</a>
                </li>
            </ul>

        </div>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    @if(Auth::user())
                        <a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @endif


                @else
                    <button class="btn btn-info ml-5" onclick="location.href='{{route('login')}}'" >Вхід</button>

                    @if (Route::has('register'))
                        <button class="btn btn-success" onclick="location.href='{{ route('register') }}'">Регісрація</button>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

</header>
<body>


@yield('main_page')
@yield('film_page')
@yield('content')
@yield('favorite_page')
@yield('profile_change')




</body>

</html>