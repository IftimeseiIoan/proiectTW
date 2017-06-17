<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
    @include('partials._navbar')
    <div class="main">
      <div class="container">
        @yield('content')
      </div><!-- end container -->
        @include('partials._footer')
    </div><!--end main-->
  </body>
  @yield('scripts')
</html>
