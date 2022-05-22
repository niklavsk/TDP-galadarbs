<!DOCTYPE html>
<html lang="lv">
    <head>
        <title>Mans ceļš uz universitāti</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

        </script>
        @stack('scripts')
    </head>
    <body>
        <nav class="topnav">
            <div class="logo-container">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/images/logo.png') }}" alt="">
                </a>
            </div>

            <div class="language-links-container">
                <ul class="language-links">
                    <li class="active">LV</li>
                    <li>EN</li>
                </ul>
            </div>
        </nav>

        <div class="container @yield('color')">
            @yield('content')
        </div>
    </body>
</html>
