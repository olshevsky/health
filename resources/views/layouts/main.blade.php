<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/styles/main.css">
        <style>
            /*To do - move to SCSS*/
            .innerForm p.errorMessage{
                padding: 0 0;
                margin: -20px 0 20px 0;
            }

            .alert.alert-danger ul li{
                margin-top: 1em;
            }

            .alert.alert-danger ul li,
            .innerForm p.errorMessage{
                color: #ff0000;
                font-size: .9em;
            }

            .innerFormButton button {
                outline: none;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            @include('header')
            @yield('content')
            @include('footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/vue.min.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('custom-scripts')
    </body>
</html>
