<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <x-darkmodeScript />
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

    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
            
        });
    </script>
    
    
</html>