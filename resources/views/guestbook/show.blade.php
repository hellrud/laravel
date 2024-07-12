<x-layout>
    @session('message')
    <div class="text-xl text-center">{{ session('message') }}</div>
    @endsession
    <div class="mx-8 leading-relaxed">
   <p class="font-bold text-center tracking-wide text-lg">{{ $guestbook->title }}</p> <br>
   <p class="tracking-widest text-base text-center">{{ $guestbook->guestbook }} <br><br>
   @ {{ $guestbook->created_at }} by {{ $username }}</p>
    </div>
    <div class="flex flex-auto justify-center">
    <x-secondary-button class="ml-6 mt-10"><a href="{{route('guestbook.index')}}">back</a></x-secondary-button>
    </div>
</x-layout>