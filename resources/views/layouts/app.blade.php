<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('Frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
       
     
        @include('layouts.inc.front-navbar1')
        <main class="py-4">
            @yield('content')
        </main>
        {{-- @include('layouts.inc.front-footer') --}}
    </div>
    <!-- Scripts -->
    <script src="{{ asset('Frontend/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('Frontend/js/bootstrap.bundle.min.js') }}" ></script>

</body>
</html>
