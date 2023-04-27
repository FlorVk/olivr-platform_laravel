

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        

        

        <div class="flex justify-between ">
            <div class="width-100 flex flex-column">
                <x-input-label class="input-label" for="password" :value="__('Nieuw wachtwoord')" />
                <x-text-input id="password" name="password" type="password" class="width-80 input-field" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="width-100 flex flex-column">
                <x-input-label class="input-label" for="password_confirmation" :value="__('Bevestig wachtwoord')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="width-80 input-field" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="width-100 flex flex-column">
            <x-input-label class="input-label" for="current_password" :value="__('Huidig wachtwoord')" />
            <x-text-input id="current_password" name="current_password" type="password" class="width-40 input-field" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
        <button class="btn btn-blue" type="submit">Update Wachtwoord</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
