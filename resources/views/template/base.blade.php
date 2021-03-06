<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle') - Ayo Dolan!</title>

        {{-- CSS HERE --}}
        <link rel="stylesheet" href="{{asset('assets/css/ayodolan.main.css')}}">
        {{-- bootstrap  --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
        {{-- normalize --}}
        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
        {{-- fontawesome --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

        {{-- FONT HERE --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:100,200,400|Montserrat:200,400,600" rel="stylesheet">

        @yield('css')

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
    {{-- fontawesome --}}
    <script src="{{asset('assets/vendor/fontawesome/js/all.css')}}"></script>
    {{-- nicescroll --}}
    <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
    
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
        alert(msg);
        }
    </script>
    @yield('js')

</html>