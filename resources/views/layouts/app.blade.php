<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('css/style.css')}} " rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/slick.css')}} "/>
    <link rel="stylesheet" type="text/css" href="{{url('css/slick-theme.css')}} "/>
</head>
<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <script src="{{url('js/app.js')}} "></script>
    <script src="{{url('js/script.js')}} "></script>
    <script src="{{url('js/slick.js')}} "></script>
</body>
</html>
