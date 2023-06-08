<x-app-layout>
    <h1 class="page-title">Maak een student kamer aan</h1>
    <main class="main justify-center">
        <section>
            <form class="box padding-sides" method="POST" action="/admin/students" enctype="multipart/form-data">
                @csrf

                <!-- Item name -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_name" :value="__('Naam')" />
                    <x-text-input class="input-field" id="student_name" type="text" name="student_name" required />
                    <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
                </div>

                <!-- Class -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_class" :value="__('Klas')" />
                    <textarea class="input-field input-description" name="student_class" id="student_class" required></textarea>
                    <x-input-error :messages="$errors->get('student_class')" class="mt-2" />
                </div>

                <!-- image -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_image" :value="__('Afbeelding')" />
                    <x-text-input class="btn width-100" id="student_image" type="file" name="student_image" />
                    <x-input-error :messages="$errors->get('student_image')" class="mt-2" />
                </div>


                <input type="submit" class="btn btn-main margin-y btn-big" value="Plaats">
            </form>
        </section>
    </main>

    
</x-app-layout>