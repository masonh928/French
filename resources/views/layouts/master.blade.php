<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EGHS French - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body id="app" class="bg-gray-200 text-gray-800">
        @include('partials.userbar')
        @include('partials.header')

        @yield('content')
        
        @include('partials.footer')
    </body>
</html>