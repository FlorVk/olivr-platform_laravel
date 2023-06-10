<x-app-layout>


<section class="sticky">
    <div class="flex align-center justify-between ">
            <h1 class="page-title page-title-small">Nieuwe time-out</h1>
            <a class="btn btn-warning" href="/timeout/create">Stop</a>
    </div>

    <div class="flex ">
        <div class="flex align-center">
            <a href="#step1" class="steps-btn steps-btn-active">1</a>
            <h2 class="px-1">Algemeen</h2>
        </div>

        <div class="flex px-1 align-center"> 
            <a href="#step2" class="steps-btn">2</a>
            <h2 class="px-1">Ruimte</h2>
        </div>

        <div class="flex px-1 align-center">
            <a href="#step3" class="steps-btn">3</a>
            <h2 class="px-1">Tijd</h2>
        </div>
    </div>
</section>
    

    <form class="margin-top-large" method="POST" action="/timeout/new">
    @csrf
        <section id="step1">
            

            <div class="height-100">
                <div class="steps-div">
                    <h2 class="py-small">Naam leerling:</h2>
                    <div class="">
                        <select class="input-field" name="student_id">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" name="student_id">{{ $student->student_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="steps-div">
                    <h2 class="py-small">Mag de resterende tijdsduur zichtbaar zijn in de time-out?</h2>
                    <p>Overleg dit met degene die in de time-out gaat.</p>

                    <div class="steps-div width-20">
                        <div class="py-1 checkbox">
                            <input type="radio" id="visibility-1" name="time_visibility" value="1">
                            <label class="px-1" for="visibility-1">Ja</label>
                        </div>

                        <div class="py-1 checkbox">
                            <input type="radio" id="visibility-2" name="time_visibility" value="0">
                            <label class="px-1" for="visibility-2">Nee</label>
                        </div>
                    </div>
                </div>
            </div>

        </section>
            
        <section id="step2">
            

            <div class="steps-div step-box">
                <h2 class="py-small">Kies een ruimte voor de time-out</h2>

                <div class="flex justify-between">
                    @foreach($rooms as $room)
                        <label for="room-{{ $room->id }}" class="room-label">
                            <input type="radio" id="room-{{ $room->id }}" value="{{ $room->id }}" name="room_id">
                            <img class="vr-item-image" src="{{ asset('storage/'. $room->room_image) }}" alt="Room Image">
                        </label>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="step3">
            

            <div class="steps-div">
                <h2 class="py-small">Hoelang mag de time-out duren?</h2>
                <p class="py-small">Overleg dit met degene die in de time-out gaat.</p>

                <div class="width-20">
                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" value="0">
                        <label class="px-1" for="duration-1">10 minuten</label>
                    </div>
                    
                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" value="1">
                        <label class="px-1" for="duration-2">15 minuten</label>
                    </div>

                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" value="2">
                        <label class="px-1" for="duration-3">20 minuten</label>
                    </div>
                </div>
            </div>
        </section>

        <input type="submit" class="btn btn-yellow" value="Plaats">

        
    </form>
            

    
    
</x-app-layout>