<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Dolan!</title>

        {{-- CSS HERE --}}
        <link rel="stylesheet" href="{{asset('assets/css/ayodolan.main.css')}}">
        {{-- bootstrap  --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
        {{-- normalize --}}
        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">

        {{-- FONT HERE --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:100,200,400|Montserrat:200,400,600" rel="stylesheet">

    </head>
    <body>
    @include('template/navbar')
    
    @yield('content')
        
    </body>
    <!-- jquery -->
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    {{-- SCRIPT HERE --}}
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
    {{-- nicescroll --}}
    <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
</html>