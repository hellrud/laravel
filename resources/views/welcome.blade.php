<x-layout>
    @include('components.cards', ['guestbooks' => $guestbooks])

    <div class="my-8 mx-2 md:mx-10">
    {{ $guestbooks->links() }}
    </div>
</x-layout>