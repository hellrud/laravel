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
        <body class="font-light antialiased dark:bg-black dark:text-white/50 bg-slate-50">
                    <!-- Header & Nav -->
                    @include('layouts.header')
                    <!-- Greeting -->
                    <div>
                    @auth
                        <p class="text-center -mt-6 md:-mt-16 text-xl font-semibold dark:text-indigo-300 tracking-wider">Welcome to the Laravel Guestbook</p>
                        <x-book-form />
                        @else
                        <p class="text-center -mt-6 md:-mt-16 text-xl font-semibold dark:text-indigo-300 tracking-wider">Dear Guest,<br>Welcome to the Laravel Guestbook</p>
                    @endauth
                    </div>
                    <hr class="m-6">
                     <!-- Content -->
                    <main>
                    <div class="flex flex-wrap gap-4 items-center justify-center mb-5">
                        <x-content-card title="blabla title" href="guestbook/1">Content in the card</x-content-card>
                        <x-content-card title="blabla title" href="guestbook/1">Content in the card</x-content-card>
                        <x-content-card title="blabla title" href="guestbook/1">Content in the card</x-content-card>
                        <x-content-card title="bla bla bla bla bla bla bla bla bla bla " href="guestbook/1">Content in the card Content in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cent in the cardContent in the cardContent in the cardContent in the card</x-content-card>
                        <x-content-card title="bla bla bla bla bla bla bla bla bla bla " href="guestbook/1">Content in the card Content in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cent in the cardContent in the cardContent in the cardContent in the card</x-content-card>
                        <x-content-card title="bla bla bla bla bla bla bla bla bla bla " href="guestbook/1">Content in the card Content in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cent in the cardContent in the cardContent in the cardContent in the card</x-content-card>
                        <x-content-card title="blabla title" href="guestbook/1">Content in the card</x-content-card>
                        <x-content-card title="bla bla bla bla bla bla bla bla bla bla " href="guestbook/1">Content in the card Content in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cent in the cardContent in the cardContent in the cardContent in the card</x-content-card>
                        <x-content-card title="blabla title" href="guestbook/1">Content in the card</x-content-card>
                        <x-content-card title="bla bla bla bla bla bla bla bla bla bla " href="guestbook/1">Content in the card Content in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cardContent in the cent in the cardContent in the cardContent in the cardContent in the card</x-content-card>
                    </div> 
                    </main>
        </body>
        <x-themeToggle />
    @include('layouts.footer')
</html>