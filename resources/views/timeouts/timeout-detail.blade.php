<x-app-layout>
    <section class="flex justify-between align-center">
        <div>
            <h1 class="page-title">{{ $session->student->student_name }}</h1>
            <h3>{{ $session->student->student_class }}</h3>
        </div>

        <div >
            <h3 class="margin-y">{{ $session->session_date }}</h3>
        </div>
    </section>


    <section class="section-grid">

        <div class="grid grid1 box" style="background-image: url('{{ asset('storage/'. $session->room->room_image) }}')">
            <h1 class="h1 flex justify-center font-white height-100 align-center">{{ $session->room->room_name }}</h1>
        </div>

        <div class="grid grid2 box">
            <div class="grid-container">
                    @if($session->session_duration == 0)
                        <p class="session-duration-detailed">10</p>
                    @elseif($session->session_duration == 1)
                        <p class="session-duration-detailed">15</p>
                    @elseif($session->session_duration == 2)
                        <p class="session-duration-detailed">20</p>
                    @else
                        <p class="bold">error</p>
                    @endif
                    <h3 class="py-2">Minuten in de ruimte</h3>
            </div>
            
        </div>

        <div class="grid grid3 box">

        </div>

        <div class="grid grid4 box">
            <div class="">
            <form method="POST" action="{{ route('session.update', ['id' => $session->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex justify-between align-center">
                    <h2>Opmerkingen</h2>
                    <input type="submit" class="btn btn-yellow margin-y" value="Aanpassen">
                </div>
                <div >
                    <textarea class="input-none width-100" name="session_description" id="session_description" required >{{  $session->session_description  }}</textarea>
                    <x-input-error :messages="$errors->get('session_description')" class="mt-2" />
                </div>
                
                

            </form>
            </div>

        </div>

    </section>

</x-app-layout>