@props(['guestbooks'])

<div class="flex flex-wrap gap-4 items-center justify-center mb-5">
    @foreach ($guestbooks as $guestbook)
    <x-content-card title="{{$guestbook->title}}" href="guestbook/{{$guestbook->id}}">
        {{Str::words($guestbook->guestbook, 30)}}
    </x-content-card>
    @endforeach
</div>