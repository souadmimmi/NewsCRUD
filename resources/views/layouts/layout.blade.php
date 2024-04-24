<!DOCTYPE html>
<html lang="en">

@include('styles.css')


  <head>
  <title>  @yield('title')</title>

    </head>
    
    <body>
        @include('layouts.navbar')

            @yield('content')


  



  </body>
</html>