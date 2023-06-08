<x-guest-layout>
    <h1 class="page-title">Log in</h1>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="width-40 flex flex-column">
            <input class="input-field" id="email" placeholder="E-mailadres" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <input class="input-field" id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Wachtwoord" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-between margin-y">

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingelogd blijven') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Wachtwoord vergeten?') }}
                </a>
            @endif

        </div>

        <button class="btn btn-yellow width-100 margin-y">{{ __('Log in') }} </button>

    </form>

    <a href="/register">Heb je al een account? <span class="bold">Registreer hier</span></a>
</x-guest-layout>
