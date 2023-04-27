<x-app-layout>

        <section class="flex align-center justify-between">
            <div>
                <h1 class="page-title">Hallo {{ Auth::user()->firstname }}</h1>
                <p>Laten we <span class="bold">wiskunde</span> aanleren aan <span class="bold">4 Economie</span></p>
            </div>
            <a class="btn btn-blue" href="/timeout/create">Nieuwe time-out</a>
        </section>

        <section class="py-1">

            <div class="">
                <h3>Time-outs deze week</h3>
                <div>
                    <img class="item-picture py-1" src="{{  asset('placeholder.png')  }}" alt="">
                </div>
                
            </div>

            <div class="py-1">
                <h3>Leerlingen die in de time-out hebben gezeten vandaag</h3>
                
                <table class="table">
                    <tr class="table-heading">
                        <th>Naam</th>
                        <th>Datum</th>
                        <th>Ruimte</th>
                        <th>Tijd</th>
                        <th>Opname</th>
                    </tr>

            <tbody class="table-body">
                @foreach($sessions as $session)
                    <tr class="table-row">
                        <td>{{ $session->student->student_name }}</td>
                        <td>{{ $session->session_date }}</td>
                        <td>{{ $session->room->room_name }}</td>
                        <td>{{ $session->session_duration }}</td>
                        <td>{{ $session->audio }}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
            </div>

        </section>
        

    </x-app-layout>
