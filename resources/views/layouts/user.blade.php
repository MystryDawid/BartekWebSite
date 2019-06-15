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
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-lg-1 col-1 text-nowrap pt-1">
                    <a class="text-muted" href="#">Links to socialmedia</a>
                </div>
                <div class="col-lg-1 col-1 text-center">
                    <a class="blog-header-logo text-dark" href="{{url('/')}}">LOGO</a>
                </div>
                <div class="col-lg-1 col-1 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                </div>
                </div>
            </header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler align-items-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <nav class="nav d-flex  justify-content-center w-100">
                        @foreach ($categoris as $item)
                            <a class="p-2 text-muted" href="{{url("/category/{$item['id']}")}}">{{$item['Name']}}</a>
                        @endforeach
                    </nav>
                </div>
            </nav>
        </div>


        
        @yield('content')


        <div class="container">
            <div class="row">
                <div class="col-lg-6 prn"><div class="bg-secondary text-left pl-5">Informajce</div></div>
                <div class="col-lg-6 pln"><div class="bg-secondary text-right pr-5">Dawid Gamoń©</div></div>
            </div>
        </div>



    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="{{asset('public/js/custome.js')}}"></script>
    </body>
</html>

