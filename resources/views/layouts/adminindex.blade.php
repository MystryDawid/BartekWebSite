<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content='{{ csrf_token() }}'>
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <title>bartek Urban</title>
        <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @include('components.navbarA')
        @yield('content')
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="{{asset('public/js/custome.js')}}"></script>
    </body>
</html>