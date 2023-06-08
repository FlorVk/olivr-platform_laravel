<x-app-layout>
    <a href="/students/{{  $student->id  }}"><h1 class="page-title">Leerling aanpassen: {{  $student->student_name  }}</h1></a>
    <main class="main justify-center">
        <section>

            <form class="box padding-sides" method="POST" action="/admin/students/{{  $student->id  }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <!-- Item name -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_name" :value="__('Naam')" />
                    <x-text-input id="student_name" class="input-field" type="text" name="student_name" required :value="old('student_name', $student->student_name)"/>
                    <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
                </div>


                <!-- Description -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_class" :value="__('Klas')" />
                    <textarea class="input-field input-description" name="student_class" id="student_class" required >{{  $student->student_class  }}</textarea>
                    <x-input-error :messages="$errors->get('student_class')" class="mt-2" />
                </div>

                <!-- image -->
                <div class="flex flex-column">
                    <x-input-label class="input-label" for="student_image" :value="__('Afbeelding')" />
                    <input id="student_image" class="btn width-100" type="file" name="student_image" :value="old('student_image', $student->student_image)">
                    <x-input-error :messages="$errors->get('student_image')" class="mt-2" />
                    <div>
                    <img class="edit-picture py-1" src="{{  asset('storage/'. $student->student_image)  }}" alt="{{ $student->student_image  }}">
                    </div>
                </div>

                <input type="submit" class="btn btn-yellow margin-y btn-big" value="Aanpassen">

            </form>
        </section>
   </main>

    
</x-app-layout>