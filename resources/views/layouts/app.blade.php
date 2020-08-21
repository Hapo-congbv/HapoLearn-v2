<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
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
