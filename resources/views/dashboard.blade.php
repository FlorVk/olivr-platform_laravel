<x-app-layout>

        <section class="flex align-center justify-between mobile-sessions-search">
            <div>
                <h1 class="page-title">Hallo {{ Auth::user()->firstname }}</h1>
                <p>Laten we <span class="bold">wiskunde</span> aanleren aan <span class="bold">4 Economie</span></p>
            </div>
            <a class="btn btn-yellow" href="/timeout/create">Nieuwe time-out</a>
        </section>

        <section class="py-1">

            <div class="">
                <h3>{{ $chart->options['chart_title'] }}</h3>
                    {!! $chart->renderHtml() !!}
                
            </div>

            <div class="py-1">
                <h3>Leerlingen die in de time-out hebben gezeten vandaag</h3>
                
                <table class="table mobile-table">
                    <tr class="table-heading">
                        <th>Leerling</th>
                        <th>Datum</th>
                        <th>Ruimte</th>
                        <th>Tijd/Duur</th>
                        <th></th>
                    </tr>

                    <tbody class="table-body">
                    @foreach($sessions as $session)
                        
                        <tr class="table-row mobile-table-row">
                            <td><a href="/timeout/{{ $session->id }}">
                                <div class="flex align-center">
                                    <img class="student-image-small mobile-hide" src="{{  asset('storage/'. $session->student->student_image)  }}" alt="">
                                    <div class="px-1">{{ $session->student->student_name }}</div>
                                </div>
                            </td>
                            <td>{{ $session->session_date }}</td>
                            <td>{{ $session->room->room_name }}</td>
                            
                            @if($session->session_duration == 0)
                                <td>10 minuten</p>
                            @elseif($session->session_duration == 1)
                                <td>15 minuten</p>
                            @elseif($session->session_duration == 2)
                                <td>20 minuten</p>
                            @else
                                <td>error</p>
                            @endif
                            <td><a href="/timeout/{{ $session->id }}">></td>
                        </tr>
                    
                    @endforeach
                        
                    </tbody>
                </table>
            </div>

        </section>
        

        <section>
            {!! $chart->renderChartJsLibrary() !!}

            {!! $chart->renderJs() !!}

        </section>
    </x-app-layout>
