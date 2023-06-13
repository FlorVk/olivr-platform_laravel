<x-guest-layout>
    <h1 class="page-title">Log in</h1>
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="my-1">
            <input class="input-field width-100" id="email" placeholder="E-mailadres" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="my-1">
            <input class="input-field width-100" id="password" type="password" name="password" placeholder="Wachtwoord" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-between margin-y align-center">

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingelogd blijven') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Wachtwoord vergeten?') }}
                </a>
            @endif

        </div>

        <button class="btn btn-blue width-100 margin-y">{{ __('Inloggen') }} </button>

    </form>

    <a href="/register">Heb je nog geen een account? <span class="bold">Registreer hier</span></a>
</x-guest-layout>
