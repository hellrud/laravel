@props(['guestbooks', 'username'])

<div class="flex flex-wrap gap-4 items-center justify-center mb-4 mx-3">
    @foreach ($guestbooks as $guestbook)
    <x-content-card title="{{$guestbook->title}}" href="{{ route('guestbook.show', $guestbook) }}">
        {{Str::words($guestbook->guestbook, 3)}}
    </x-content-card>
    @endforeach
</div>