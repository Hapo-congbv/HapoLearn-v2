<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
