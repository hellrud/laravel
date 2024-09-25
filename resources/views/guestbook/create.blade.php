@if (session()->has('locale')) 
    @php
    App::setlocale(session()->get('locale'));
    @endphp
@endif
<x-layout>
   <div class="flex flex-col justify-center items-center mx-2">
  <p class="-rotate-6 mb-3 mt-3">{{ __('guestbook.header') }}</p>
  <form class="mx-auto px-10 w-full lg:w-2/3 p-3" action="{{ route('guestbook.store') }}" method="POST">
    @csrf

    <label for="title" class="mt-3 block mb-2 text-sm font-medium text-gray-900 dark:text-white"><p class="@error('title') text-red-500  @enderror">{{__('guestbook.title')}}</p></label>
   
      <x-text-input type="text" id="title" value="{{old('title')}}" name="title" class="block w-full p-2.5" placeholder="{{__('guestbook.title-ph')}}"></x-text-input>
 

    <label for="guestbook" class="mt-3 block mb-2 text-sm font-medium text-gray-900 dark:text-white"><p class="@error('guestbook') text-red-500  @enderror">{{__('guestbook.greeting')}}</p></label>
    <x-textarea-input id="guestbook" name="guestbook" rows="4" class="block p-2.5 w-full text-sm" placeholder="{{__('guestbook.greeting-ph')}}">{{old('guestbook')}}</x-textarea-input>

    <x-secondary-button type="submit" class="mt-5 w-full block justify-center" onclick="this.disabled=true;this.form.submit();">{{__('guestbook.sendbutton')}}</x-secondary-button>
  </form>
</div>
</x-layout>
