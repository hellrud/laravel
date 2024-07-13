<header class="flex items-center py-4">
    @if (Route::has('login'))
        <nav class="flex flex-auto justify-between md:justify-end gap-4 mx-2 md:mr-6 pb-5">
            @auth
                <x-nav-link class="mb-3" :href="route('profile.edit')">
                Hey, {{ Auth::user()->name }}
                </x-nav-link>
                <x-nav-link class="mb-3" :href="route('guestbook.create')">
                    Make Entry
                    </x-nav-link> 
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link class="mb-3" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            @else
                <x-nav-link :href="route('login')" class="mb-3">
                    Log in
                </x-nav-link>

                @if (Route::has('register'))
                <x-nav-link :href="route('register')" class="mb-3">
                    Register to post
                </x-nav-link>
                @endif
            @endauth

            <x-darkmodeSwitcher/>
        </nav>
    @endif
</header>