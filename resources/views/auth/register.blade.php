<x-guest-layout>
    <h1 class="page-title">Registreer nu</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="width-40 flex flex-column">
           <div>
                <x-text-input id="firstname" class="input-field" placeholder="Voornaam" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="given-name" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
           </div>
        
            <div>
                <x-text-input id="lastname" class="input-field" placeholder="Achternaam" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="family-name" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
        </div>

        <div>
            
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="input-field" placeholder="E-mailadres" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="input-field"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">

            <x-text-input id="password_confirmation" class="input-field"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="btn-yellow">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
