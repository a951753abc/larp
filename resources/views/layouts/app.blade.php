<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LARP TOOL</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 2rem;
        }
        .myMOUSE{ cursor: pointer; }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav mr-auto">
        @if (Auth::check())
            <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
        @else
            <a class="navbar-brand" href="#">LARP TOOL</a>
        @endif
    </ul>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @yield('menu')
            @if (Auth::check())
                <?php $user = Auth::user()?>
                @if ($user->type == config('const.user'))
                    @include('menu.user')
                @else
                    @include('menu.admin')
                @endif
            @endif
        </ul>
        @if (Auth::check())
        <form class="form-inline my-2 my-lg-0" id="logout-form" action=" {{ url('/logout') }}" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                logout
            </button>
            {{ csrf_field() }}
        </form>
        @endif
    </div>
</nav>

<div class="jumbotron">
    @yield('content')
</div>


    <!-- Scripts -->
    <script src="https://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
