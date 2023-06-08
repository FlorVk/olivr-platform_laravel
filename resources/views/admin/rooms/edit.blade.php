<x-app-layout>
    <a href="/rooms/{{  $room->id  }}"><h1 class="page-title">Kamer aanpassen: {{  $room->room_name  }}</h1></a>
    <main class="main justify-center">
        <section>

            <form class="box padding-sides" method="POST" action="/admin/rooms/{{  $room->id  }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <!-- Item name -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_name" :value="__('Naam')" />
                    <x-text-input id="room_name" class="input-field" type="text" name="room_name" required :value="old('room_name', $room->room_name)"/>
                    <x-input-error :messages="$errors->get('room_name')" class="mt-2" />
                </div>


                <!-- Description -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_description" :value="__('Beschrijving')" />
                    <textarea class="input-field input-description" name="room_description" id="room_description" required >{{  $room->room_description  }}</textarea>
                    <x-input-error :messages="$errors->get('room_description')" class="mt-2" />
                </div>

                <!-- image -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_image" :value="__('Afbeelding')" />
                    <input id="image" class="btn width-100" type="file" name="room_image" :value="old('room_image', $room->room_image)">
                    <x-input-error :messages="$errors->get('room_image')" class="mt-2" />
                    <div>
                        <img class="edit-picture py-1" src="{{  asset('storage/'. $room->room_image)  }}" alt="{{ $room->room_image  }}">
                    </div>
                </div>

                <input type="submit" class="btn btn-yellow margin-y btn-big" value="Aanpassen">

            </form>
        </section>
   </main>

    
</x-app-layout>