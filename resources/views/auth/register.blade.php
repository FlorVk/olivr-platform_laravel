<x-guest-layout>
    <h1 class="page-title">Registreer nu</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="flex justify-between width-100">
           <div class="width-100 flex flex-column">
                <x-text-input id="firstname" class="input-field width-90 mobile-register-name" placeholder="Voornaam" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="given-name" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
           </div>
        
            <div class="width-100 flex flex-column">
                <x-text-input id="lastname" class="input-field width-100" placeholder="Achternaam" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="family-name" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
        </div>



        <!-- Email Address -->
        <div class="my-1">
            <x-text-input id="email" class="input-field width-100" placeholder="E-mailadres" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="my-1">

            <x-text-input id="password" class="input-field width-100"
                            type="password"
                            name="password"
                            placeholder="Wachtwoord school"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="my-1">

            <x-text-input id="password_confirmation" class="input-field width-100 "
                            type="password"
                            placeholder="Herhaal wachtwoord"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <button class="btn btn-blue width-100 margin-y">{{ __('Registreer') }} </button>

    </form>
    <a href="/login">Heb je al een account? <span class="bold">Login</span></a>
</x-guest-layout>
