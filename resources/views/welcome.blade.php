<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <style type="text/css">
            html, body {
                background-image:       url('img/aqi_india.jpg');
                background-repeat:      no-repeat;
                background-position:    center center;
                background-size:        60% auto;
                background-color:       white;
                color:                  #555;
                font-family:            'Raleway', sans-serif;
                font-weight:            100;
                height:                 100vh;
                margin:                 0;
            }

            footer, .footer {
                padding: 1rem 2rem;
                color: #999;
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                background-color: #f9f9f9;
                border-top: .1rem solid #e5e5e5;
            }
        </style>
        
        @include('layouts.favicon')
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/blog') }}">Blog</a>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">New Post</a>
                        <a href="{{ url('/logout') }}">Logout</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif

            <div class="content">
                {{-- todo: doSomething; --}}
            </div>

            <footer class="footer">
                <h5 class="h5 copyright">© 2017 Purelogic Labs.</h5>
            </footer>
        </div>
    </body>
</html>
