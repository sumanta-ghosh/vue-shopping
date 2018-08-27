<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
        <title>@yield('title', 'Obaju : e-commerce template')</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
        <link href="/vue-shopping/public{{ mix('/css/theme.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/respond.min.js') }}"></script>
        <link rel="shortcut icon" href="favicon.png">
    </head>

    <body>
        <div id="app">
            @yield('wrapper')
        </div>
        <script src="/vue-shopping/public{{ mix('/js/theme.js') }}"></script>
        <script src="/vue-shopping/public{{ mix('/js/app.js') }}"></script>
    </body>
</html>