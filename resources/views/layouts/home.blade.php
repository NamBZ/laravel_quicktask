<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="header" style="text-align:center;padding:10px">
            <a href="{{ route('home') }}" title="{{ config('app.name', 'My Blog') }}" id="logo">
                <span class="is_logo" style="font-size:28px">{{ config('app.name', 'My Blog') }}</span>
            </a>
        </div>
        <div id="menu">
            <ul>
                <li class="separator"><a href="{{ route('home') }}" title="{{ __('Home') }}" class="icon"><i class="fa fa-home" aria-hidden="true"></i></a></li>

                @if (Route::has('login'))
                    @auth
                        <li class="separator"><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{ __('Dashboard') }} </a></li>
                    @else
                        <li class="separator"><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('Login') }} </a></li>

                        @if (Route::has('register'))
                            <li class="separator"><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> {{ __('Register') }} </a></li>
                        @endif
                    @endauth
                @endif

                @if (Route::has('lang'))
                    <li class="separator right"><a href="{{ route('lang', ['en']) }}"><i class="fa fa-language" aria-hidden="true"></i> en</a></li>
                    <li class="separator right"><a href="{{ route('lang', ['vi']) }}"><i class="fa fa-language" aria-hidden="true"></i> vi</a></li>
                    <span class="clearfix"></span>
                @endif
            </ul>
        </div>

        {{ $slot }}

        <div class="footer" style="text-align: center; color:white;">
            2022 © By <b>NamPT.Me</b>™
        </div>
    </body>
</html>
