<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
          @include('_include.navbar')
          <div class="column wrapper">
            @guest
            @else
              <div class="column is-2">
                @include('_include.aside')
              </div>
            @endguest
            <div class="columns">
              <div class="is-paddingless">
                @include('_include.carousel')
              </div>
            </div>
            @yield('content')
          </div>
          @include('_include.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
