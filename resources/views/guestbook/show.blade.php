<x-layout>
    @session('message')
    <div class="text-xl">{{ session('message') }}</div>
    @endsession
    <div class="mx-8 leading-relaxed">
   <p class="font-bold text-center tracking-wide text-lg">{{ $guestbook->title }}</p> <br>
   <p class="tracking-widest text-base">{{ $guestbook->guestbook }}</p> <br>
   @ {{ $guestbook->created_at }}
    </div>
    <x-secondary-button class="ml-6 mt-10"><a href="{{route('guestbook.index')}}">back</a></x-secondary-button>
</x-layout>
