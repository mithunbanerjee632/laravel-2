<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link  rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}" >
    <link  rel="stylesheet"  href="{{asset('css/custom.css')}}" >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    @include('layout.menu')
    
    @yield('content')
    
 
    @include('layout.footer')
  <script src="{{asset('js/jquery.min.js')}}"></script>   
  <script src="{{asset('js/bootstrap.min.js')}}"></script>  
  <script src="{{asset('js/popper.min.js')}}"></script> 
  <script src="{{asset('js/custom.js')}}"></script>   
  </body>
</html>