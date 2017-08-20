<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ env('APP_NAME') }}</title>

    @yield('styles')

    @include('layouts.favicon')
  </head>

  <body>

    @include('blog.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">AQI India - Blog</h1>
      </div>
    </div>

    <div class="container">

      <div class="row">
        @yield('content')

        {{-- @include('blog.sidebar') --}}
      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="footer">
        @include('layouts.footer')
    </footer>

    @yield('scripts')
  </body>
</html>
