<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- boostrap css --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- my css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
  </head>
  <body>
    {{-- navbar component --}}
    @include('partials.navbar')

    {{-- content --}}
    <div class="container">@yield('content')</div>

    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  </body>
</html>
