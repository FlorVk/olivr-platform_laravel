<x-guest-layout>
    <h1 class="page-title">Wachtwoord vergeten?</h1>
    <p>Vul hieronder je e-mail adres in en we verzenden je een reset link.</p>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="input-field width-100" placeholder="E-mailadres" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-blue width-100 margin-y">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

    <a href="/register">Wachtwoord toch niet kwijt? <span class="bold">Ga naar log in</span></a>
</x-guest-layout>
