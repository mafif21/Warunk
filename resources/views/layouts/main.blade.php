<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Warunk</title>
  </head>
  <body>
    {{-- navbar component --}}
    @include('partials.navbar')

    {{-- content --}}
    <div class="container">@yield('content')</div>

    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  </body>
</html>