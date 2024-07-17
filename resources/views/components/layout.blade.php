@props(['footer'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link type="image/png" sizes="96x96" rel="icon" href="/icon.png">

        <x-darkmodeScript />
    </head>
        <body class="font-light antialiased dark:bg-black dark:text-white/50 bg-slate-50 min-h-screen flex flex-col">
            <!-- Header & Nav -->
            @include('layouts.header')
            <!-- Greeting -->
            <div>
                @auth
                    <p class="text-center -mt-6 md:-mt-8 text-xl md:text-3xl font-semibold tracking-wider dark:bg-gradient-to-r from-transparent via-gray-800 to-transparent dark:text-white/60">Welcome back, {{ Auth::user()->name }}</p>
                    @else
                    <p class="text-center -mt-6 md:-mt-8 text-xl md:text-3xl font-semibold tracking-wider dark:bg-gradient-to-r from-transparent via-gray-800 to-transparent dark:text-white/60">Welcome to the Laravel Guestbook</p>
                @endauth
            </div>
            <hr class="m-6">
            <!-- Content -->
            <main>
            {{ $slot }}
            </main>
            <x-themeToggle />
            @include('layouts.footer')
        </body>
</html>