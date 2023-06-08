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
            <h1 class="h1 flex justify-center font-white">{{ $session->room->room_name }}</h1>
        </div>

        <div class="grid grid2 box">
            <div class="">
                    {!! $chart->renderHtml() !!}
                    <h3>{{ $chart->options['chart_title'] }}</h3>
            </div>
            
        </div>

        <div class="grid grid3 box">

        </div>

        <div class="grid grid4 box">

        </div>

        <div class="grid grid5 box">

        </div>

        <div class="grid grid6 box">

        </div>

        <div class="grid grid7 box">
            <div class="flex flex-column">
                <x-input-label class="input-label" for="room_description" :value="__('Opmerkingen')" />
                <textarea class="input-field input-description" name="session_description" id="session_description" required >{{  $session->session_description  }}</textarea>
                <x-input-error :messages="$errors->get('session_description')" class="mt-2" />
            </div>

        </div>

    </section>

    <section>
            {!! $chart->renderChartJsLibrary() !!}

            {!! $chart->renderJs() !!}

        </section>
</x-app-layout>