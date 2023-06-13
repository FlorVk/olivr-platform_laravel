<x-guest-layout>
    <h1 class="page-title">Wachtwoord herstellen</h1>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="my-1">
            <x-text-input id="email" class="input-field width-100" type="email" placeholder="E-mailadres" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="my-1">
            <x-text-input id="password" class="input-field width-100" placeholder="Wachtwoord" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="my-1">

            <x-text-input id="password_confirmation" class="input-field width-100"
                                placeholder="Bevestig wachtwoord"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <x-primary-button class="btn btn-blue width-100 margin-y">
            {{ __('Reset Password') }}
        </x-primary-button>

    </form>
</x-guest-layout>
