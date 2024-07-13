<div class="mt-6 flex flex-col justify-center items-center">
<form action="{{ route('guestbook.store') }}" method="POST" class="w-full max-w-sm sm:max-w-lg sm:mr-30">
  @csrf
  <div class="flex items-center mb-6">
    <div class="w-1/3">
      <x-input-label class="" for="inline-title"><p class="@error('title') text-red-500  @enderror">Title</p></x-input-label>
    </div>
    <div class="w-2/3">
      <x-text-input class="w-full" id="inline-title" type="text" name="title"></x-text-input>
    </div>
  </div>
  <div class="flex items-center mb-6">
    <div class="w-1/3">
      <x-input-label class="" for="inline-content">
        <p class="@error('guestbook') text-red-500  @enderror">Guestbook</p>
      </x-input-label>
    </div>
    <div class="w-2/3">
      <x-textarea-input class="w-full" id="inline-content" rows="5" placeholder="Your Text" name="guestbook"></x-textarea-input>
    </div>
  </div>

  <div class="flex">
    <div class="w-2/6">
      </div>
      <div class="w-4/6">
          <x-secondary-button type="submit">Make Entry</x-secondary-button>
        </div>
  </div>
</form>
</div>