<!doctype html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>
  <body>
    @include('layout.menu')

    @yield('content')

    @include('layout.footer')

    @yield('script')
   <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </body>
</html>
