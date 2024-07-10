<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
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
                    <div class="text-center mt-4">
                    @auth
                        Welcome to the Laravel Guestbook, {{ Auth::user()->name }}
                        <x-book-form />
                        @else
                        Dear Guest,<br>
                        Welcome to the Laravel Guestbook
                    @endauth
                    </div>
                    <hr class="my-4">
                    <main>
                    GuestBookContentCards
                    </main>

    </body>
</html>