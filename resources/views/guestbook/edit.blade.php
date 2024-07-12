<x-layout>
    <div class="mt-6 flex flex-col justify-center items-center">
        <form action="{{ route('guestbook.update', ['guestbook' => $guestbook]) }}" method="POST" class="w-full max-w-sm sm:max-w-lg sm:mr-30">
          @csrf
          @method('PUT')
          <div class="flex items-center mb-6">
            <div class="w-1/3">
              <x-input-label class="" for="inline-title">Title</x-input-label>
            </div>
            <div class="w-2/3">
              <x-text-input class="w-full" id="inline-title" type="text" name="title" value="{{ $guestbook->title}}"></x-text-input>
            </div>
          </div>
          <div class="flex items-center mb-6">
            <div class="w-1/3">
              <x-input-label class="" for="inline-content">
                Guestbook
              </x-input-label>
            </div>
            <div class="w-2/3">
              <x-textarea-input class="w-full" id="inline-content" rows="5" placeholder="Your Text" name="guestbook">{{ $guestbook->guestbook}}</x-textarea-input>
            </div>
          </div>
        
          <div class="flex">
            <div class="w-2/6">
              </div>
              <div class="w-4/6">
                  <x-secondary-button type="submit">Change Entry</x-secondary-button>
                </div>
          </div>
        </form>
        </div>
</x-layout>
