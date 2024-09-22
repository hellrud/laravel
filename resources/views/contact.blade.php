<x-layout>
  @session('message')
  <x-toast-success message="{{session('message') }}" />
  @endsession

<div class="flex flex-col justify-center items-center mx-2">
  <img src="{{ asset('code.png')}}" width="180px" class="-rotate-6">

  <form class="mx-auto px-10 -mt-6 w-full lg:w-2/3 p-3" action="{{ route('contactsend') }}" method="POST">
    @csrf
    
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><p class="@error('name') text-red-500  @enderror">Your name</p></label>
    <div class="flex">
      <span class="inline-flex items-center px-3 text-sm bg-white text-gray-900 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-900 dark:text-gray-400 dark:border-gray-600">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg>
      </span>
      <x-text-input type="text" id="name" value="{{old('name')}}" name="name" class="border-l-0 rounded-none rounded-e-md flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Mike Jordan"></x-text-input>
    </div>

    <label for="email" class="mt-3 block mb-2 text-sm font-medium text-gray-900 dark:text-white"><p class="@error('email') text-red-500  @enderror">Your email</p></label>
    <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
          <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
          <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
        </svg>
      </div>
      <x-text-input type="text" id="email" value="{{old('email')}}" name="email" class="block w-full ps-10 p-2.5" placeholder="name@email.com"></x-text-input>
    </div>

    <label for="message" class="mt-3 block mb-2 text-sm font-medium text-gray-900 dark:text-white"><p class="@error('message') text-red-500  @enderror">Your message</p></label>
    <x-textarea-input id="message" name="message" rows="4" class="block p-2.5 w-full text-sm" placeholder="Leave a message...">{{old('message')}}</x-textarea-input>

    <x-secondary-button type="submit" class="mt-5 w-full block justify-center" onclick="this.disabled=true;this.form.submit();">Send Message</x-secondary-button>
  </form>
</div>
</x-layout>