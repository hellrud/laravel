<x-layout>
    @session('message')
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-600 justify-center mx-4" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Success!</span> {{ session('message') }}
        </div>
    </div>
    @endsession
    <div class="mx-8 leading-relaxed">
   <p class="font-bold text-center tracking-wide text-lg">{{ $guestbook->title }}</p> <br>
   <p class="tracking-widest text-base text-center">{{ $guestbook->guestbook }} <br><br>
   @ {{ $guestbook->updated_at }} by {{ $username }}</p>
    </div>
    <div class="flex flex-auto justify-center">
    <x-secondary-button class="ml-6 mt-10 mb-2">
        @if (session('message'))
        <a href="{{ route('guestbook.index') }}">home</a>
        @else
        <a href="{{ url()->previous() }}">back</a>
        @endif
    </x-secondary-button>
    </div>
</x-layout>