<header class="flex items-center py-4">
                        @if (Route::has('login'))
                            <nav class="flex flex-1 justify-end gap-2 mr-2 sm:mr-10 pb-5">
                                @auth
                                    <x-nav-link class="">
                                    Hey, {{ Auth::user()->name }}
                                    </x-nav-link>        
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-nav-link>
                                    </form>
                                @else
                                    <x-nav-link :href="route('login')">
                                        Log in
                                    </x-nav-link>

                                    @if (Route::has('register'))
                                    <x-nav-link :href="route('register')">
                                        Register to post
                                    </x-nav-link>
                                    @endif
                                @endauth
                            </nav>
                        @endif
</header>