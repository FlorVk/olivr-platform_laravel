    <div class="flex align-center width-40 justify-between mobile-profile-image">
        <img class="profile-image" src="{{  asset('storage/'. $user->user_image)  }}" alt="">
        <a class="btn btn-yellow" id="more" href="#" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'X':'Edit');});"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 8.23992L7.24 20.9999H3V16.7599L15.76 3.99992C16.3225 3.43812 17.085 3.12256 17.88 3.12256C18.675 3.12256 19.4375 3.43812 20 3.99992V3.99992C20.5618 4.56242 20.8774 5.32492 20.8774 6.11992C20.8774 6.91492 20.5618 7.67742 20 8.23992Z" stroke="#F9F6F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
    <div class="details" style="display:none">

        <form class="box padding-sides" method="POST" action="/settings/image/{{  $user->id  }}" enctype="multipart/form-data">
        @csrf
                @method('PATCH')
            <div class="flex flex-column">
                <x-input-label class="input-label" for="user_image" :value="__('Afbeelding')" />
                <input id="image" class="btn width-100" type="file" name="user_image" :value="old('user_image', $user->user_image)">
                <x-input-error :messages="$errors->get('user_image')" class="mt-2" />
                
            </div>

            <input type="submit" class="btn btn-yellow margin-y btn-big" value="Aanpassen">
        </form>
    </div>
    
    
    
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="flex justify-between mobile-flex-row">
                <div class="width-100 flex flex-column">
                    <label class="input-label" for="firstname">Voornaam</label>
                    <input class="width-80 input-field mobile-input-100" value="{{ $user->firstname }}" name="firstname" type="text" placeholder="Voornaam" required autofocus autocomplete="name">
                </div>

                <div  class="width-100 flex flex-column">
                    <label class="input-label" for="lastname">Achternaam</label>
                    <input class="width-80 input-field mobile-input-100" value="{{ $user->lastname }}" name="lastname" type="text" placeholder="Voornaam">
                </div>
        </div>

        <div class="flex justify-between align-center mobile-flex-row">
            <div class="width-100 flex flex-column">
                <label class="input-label" for="email">E-mailadres</label>
                <input class="width-80 input-field mobile-input-100" value="{{ $user->email }}" name="email" type="email" placeholder="email">
            </div>

            <div class="width-100 flex flex-column">
                <button class="btn btn-yellow width-80 mobile-input-100 my-1 mobile-input-100" type="submit">Update profiel</button>

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

        </div>
        
    </form>