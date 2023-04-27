    <form action="">
        <img class="profile-image" src="{{  asset('placeholder.png')  }}" alt="">
    </form>
    
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex justify-between ">
                <div class="width-100 flex flex-column">
                    <label class="input-label" for="firstname">Voornaam</label>
                    <input class="width-80 input-field" value="{{ $user->firstname }}" name="firstname" type="text" placeholder="Voornaam" required autofocus autocomplete="name">
                </div>

                <div  class="width-100 flex flex-column">
                    <label class="input-label" for="lastname">Achternaam</label>
                    <input class="width-80 input-field" value="{{ $user->lastname }}" name="lastname" type="text" placeholder="Voornaam">
                </div>
        </div>

        <div class="width-100 flex flex-column">
            <label class="input-label" for="email">E-mailadres</label>
            <input class="width-40 input-field" value="{{ $user->email }}" name="email" type="email" placeholder="email">
        </div>


        <div class="flex items-center gap-4">
        <button class="btn btn-blue" type="submit">Update profiel</button>

            @if (session('status') === 'profile-updated')
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
