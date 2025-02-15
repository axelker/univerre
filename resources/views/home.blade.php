<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Univerre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <header class="sticky top-0 bg-black w-full py-6 px-8">
            <nav class="flex justify-between">
                <img width="32" height="32" [src]="favicon" alt="logo">
                <span>EN</span>
            </nav>
        </header>

        <main class="mt-6">
            @include('sections.letter')
            @include('sections.contact')
        </main>

        <footer class="sticky bottom-0 w-full bg-black text-white text-center text-sm py-4 ">
            Copyright: © [2025] A Smart Packaging Experience by Univerre
        </footer>

    </body>
</html>
