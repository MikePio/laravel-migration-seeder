<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/laravel.png') }}" />

        <title>LARAVEL MIGRATION SEEDER | @yield('title')</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

      @include('partials.header')

      <main>
        @yield('content')
      </main>

      @include('partials.footer')

    </body>
</html>
