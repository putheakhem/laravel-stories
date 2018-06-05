<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
          <!--  Start Nav-->
          <nav class="navbar">
            <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active">
                            Home
                        </a>
                    <a class="navbar-item">
                            Stories
                        </a>
                    <a class="navbar-item">
                            About Me
                        </a>
                    <a class="navbar-item">
                            Help
                        </a>

                </div>
            </div>
        </div>
          </nav>  <!-- End Nav -->
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
