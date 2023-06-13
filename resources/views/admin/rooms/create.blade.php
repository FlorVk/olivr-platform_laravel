<x-app-layout>
    <h1 class="page-title">Maak een nieuwe kamer aan</h1>
    <main class="main justify-center">
        <section>
            <form class="box padding-sides" method="POST" action="/admin/rooms" enctype="multipart/form-data">
                @csrf

                <!-- Item name -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_name" :value="__('Naam')" />
                    <x-text-input class="input-field" id="room_name" type="text" name="room_name" required />
                    <x-input-error :messages="$errors->get('room_name')" class="mt-2" />
                </div>

                <!-- Description -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_description" :value="__('Beschrijving')" />
                    <textarea class="input-field input-description" name="room_description" id="description" required></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- image -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="room_image" :value="__('Afbeelding')" />
                    <x-text-input class="btn width-100" id="room_image" type="file" name="room_image" />
                    <x-input-error :messages="$errors->get('room_image')" class="mt-2" />
                </div>

                
                <input type="submit" class="btn btn-yellow margin-y btn-big" value="Plaats">
            </form>
        </section>
    </main>

    
</x-app-layout>