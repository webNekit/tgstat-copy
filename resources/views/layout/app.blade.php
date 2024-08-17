<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') | {{ config('app.name') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon-180x180.png') }}" />
        @livewireStyles
    </head>
    <body class="website">
        @include('layout.partials.header')
        <main class="website__main" id="main">
            <div class="website__main-content" id="main-content">
                @yield('content')
            </div>
        </main>
        @include('layout.partials.footer')
        <script src="{{ asset('assets/js/index.bundle.js') }}"></script>
        @yield('script')
        @livewireScripts
    </body>
</html>
