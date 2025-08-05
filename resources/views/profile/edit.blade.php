<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        Tokens Information
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Vous avez {{ count(Auth::user()->tokens) }} tokens.
                    </p>
                </header>

                <div class="flex items-center gap-4">
                    <a href={{ route('profile.token.create') }}>
                        <x-primary-button>{{ __('Créer un nouveau token') }}</x-primary-button>
                    </a>
                    <a href={{ route('profile.token.delete') }}>
                        <x-primary-button>{{ __('Supprimer tous mes tokens') }}</x-primary-button>
                    </a>
                </div>
            </section>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>