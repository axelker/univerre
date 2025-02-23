<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Univerre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        @yield('styles')
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <header class="sticky z-40 top-0 bg-black w-full py-6 px-5">
            <nav class="flex justify-between">
            <img class="logo__img" src="https://www.univerre.ch/wp-content/themes/multi-shop-child/assets/images/logo.svg" alt="logotype">
            <span>EN</span>
            </nav>
        </header>

        <main class="mt-10 grid grid-cols-1 gap-10">
            <div class="flex justify-center">
                @include('sections.letter')
            </div>
            <div class="flex justify-center">
                @include('sections.contact')
            </div>
        </main>

        <footer class="sticky z-40 bottom-0 w-full bg-black text-white text-center text-sm py-4 ">
            <p class="copy"> Copyright: © [2025] A Smart Packaging Experience by Univerre<p>
        </footer>

    </body>
</html>
