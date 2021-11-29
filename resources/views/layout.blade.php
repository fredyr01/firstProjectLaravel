<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Valor por defecto')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <style type="text/css">
        /* .active a{
            color: red;
            text-decoration: none;
        } */
    </style>
</head>
<body>
    <div id="app">
        @include('partials/nav')

        @include('partials.session-status')

        @yield('content')
    </div>
</body>
</html>