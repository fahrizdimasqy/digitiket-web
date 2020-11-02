<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="{{asset('/js/jquery-3.2.1.slim.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        @include('components.navbar')
    </div>
    <main>
        @yield('content')
    </main>
</body>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/js/slick.js')}}"></script>
<script src="{{asset('/js/slick.min.js')}}"></script>
<script src="{{asset('/js/slick.js')}}"></script>
<script src="{{asset('/js/slick.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>

</html>
