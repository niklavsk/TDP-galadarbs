<!DOCTYPE html>
<html lang="lv">
    <head>
        <title>Mans ceļš uz universitāti</title>
        <link rel="icon" href="{{ url('/images/favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

        </script>
        @yield('scripts')
    </head>
    <body>
        <div class="content">
            <nav class="topnav">
                <div class="logo-container">
                    <a href="{{ route('home', app()->getLocale()) }}">
                        <img src="{{ url('/images/logo.png') }}" alt="">
                    </a>
                </div>

                <div class="language-links-container">
                    <ul class="language-links">
                        <li
                            @if(app()->getLocale() == 'lv')
                                class="active"
                            @endif
                        >
                            <a href="{{ route('languageLv', app()->getLocale()) }}">LV</a></li>
                        <li
                            @if(app()->getLocale() == 'en')
                                class="active"
                            @endif
                        >
                            <a href="{{ route('languageEn', app()->getLocale()) }}">EN</a></li>
                    </ul>
                </div>
            </nav>

            <div class="container @yield('color')">
                @yield('content')
            </div>

            <div class="footer">
                <p><sub>Niklāvs Kadiķis, nk19021</sub></p>
            </div>
        </div>
    </body>
</html>
