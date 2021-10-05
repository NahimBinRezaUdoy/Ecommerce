<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/all.css') }}" rel="stylesheet">
        @yield('before_header')

    </head>
    <body class="antialiased">
        @include('frontend.partials._header')
          
          <main>
          
            @yield('content')
          
          </main>
          
          @include('frontend.partials._footer')
          

        
        <script src="{{ mix('js/app.js') }}">
        @yield('before_body')
    </body>
</html>
