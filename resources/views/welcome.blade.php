@if (session()->has('locale')) 
    @php
    App::setlocale(session()->get('locale'));
    @endphp
@endif
<x-layout>
    @session('message')
    <x-toast-success message="{{session('message') }}" />
    @endsession

    <div class="my-8 mx-2 md:hidden">
      {{ $guestbooks->onEachSide(1)->links() }}
    </div>
    @include('components.cards', ['guestbooks' => $guestbooks])
    <div class="my-8 mx-2 md:mx-10">
      {{ $guestbooks->onEachSide(1)->links() }}
    </div>
</x-layout>