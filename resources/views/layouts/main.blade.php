<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/styles/main.css">
    </head>
    <body>
        <div class="wrapper">
            @include('header')
            @yield('content')
            @include('footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--ToDO move to assets/compilation-->
        <script src="{{ asset('js/vue.min.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('custom-scripts')
    </body>
</html>
