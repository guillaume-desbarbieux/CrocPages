<x-dropdown>
    <x-slot name="trigger">
        <button
            class=" inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div>
                <img src="{{ asset('images/Profil.svg')  }}" />{{ Auth::check() ? Auth::user()->name : ''}}
            </div>
        </button>
    </x-slot>
    <x-slot name="content">
        <!-- Authentication -->
        @if (Auth::check())
            <x-dropdown-link :href="route('profile.edit')">
                <p>Profile</p>
            </x-dropdown-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                    <p>Deconnexion</p>
                </x-dropdown-link>
            </form>
        @else
            <x-dropdown-link :href="route('login')">
                <p>Se connecter</p>
            </x-dropdown-link>
            <x-dropdown-link :href="route('register')">
                <p>Créer un compte</p>
            </x-dropdown-link>
        @endif

    </x-slot>
</x-dropdown>
