<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Guestbook</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
       
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-light antialiased dark:bg-black dark:text-white/50">

                    <header class="flex items-center py-4">
                        
                        @if (Route::has('login'))
                            <nav class="flex flex-1 justify-center gap-2">
                                @auth
                                    <x-nav-link>
                                    Hey, {{ Auth::user()->name }}
                                    </x-nav-link>        
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-nav-link>
                                    </form>
                                @else
                                    <x-nav-link :href="route('login')">
                                        Log in
                                    </x-nav-link>

                                    @if (Route::has('register'))
                                    <x-nav-link :href="route('register')">
                                        Register to post
                                    </x-nav-link>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6 text-center">
                        @auth
                        Welcome to the Laravel Guestbook, {{ Auth::user()->name }}
                        @else
                        Dear Guest,<br>Welcome to the Laravel Guestbook
                        
                        @endauth
                    </main>

    </body>
</html>
