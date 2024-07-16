<x-layout>
    @session('message')
    <x-toast-success message="{{session('message') }}" />
    @endsession
    <div class="mx-8 leading-relaxed">
      <p class="font-bold text-center tracking-wide text-lg">{{ $guestbook->title }}</p> <br>
      <p class="tracking-widest text-base text-center">{{ $guestbook->guestbook }} <br><br>
        @ {{ $guestbook->updated_at }} by {{ $username }}</p>
      </div>
      @if ($guestbook->user_id === $request->user()->id)
      <div class="flex flex-auto justify-center">
        <x-secondary-button class="ml-6 mt-10 mb-2"><a href="{{ route('guestbook.edit', $guestbook) }}">Edit</a></x-secondary-button>
        <form action="{{ route('guestbook.destroy', $guestbook) }}" method="POST">
          @csrf
          @method('DELETE')
        <x-primary-button class="ml-6 mt-10 mb-2">Delete</x-primary-button>
        </form>
      </div>
      @endif

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