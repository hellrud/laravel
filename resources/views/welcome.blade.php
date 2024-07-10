<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-light antialiased dark:bg-black dark:text-white/50">
                    <!-- Header & Nav -->
                    @include('layouts.header')

                    <!-- Greeting -->
                    <div>
                    @auth
                        <p class="text-center -mt-6 md:-mt-16 text-xl font-semibold dark:text-indigo-300 tracking-wider">Welcome to the Laravel Guestbook</p>
                        <x-book-form />
                        @else
                        <p class="text-center -mt-6 md:-mt-16 text-xl font-semibold dark:text-indigo-300 tracking-wider">Dear Guest,<br>
                        Welcome to the Laravel Guestbook</p>
                    @endauth
                    </div>
                    <hr class="m-6">
                     <!-- Content -->
                    <main>
                    GuestBookContentCards
                    </main>

    </body>
</html>