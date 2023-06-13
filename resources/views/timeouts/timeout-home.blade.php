<x-app-layout>
    

    <section class="flex align-center justify-between py-1 mobile-sessions-search">
        <h1 class="page-title">Overzicht time-outs</h1>
        
        <a class="btn btn-yellow" href="/timeout/create">Nieuwe time-out</a>
    </section>

    <div>
            <form class="search" action="/timeout" method="get">
                <input class="search-field mobile-100" type="text" name="search" placeholder="Zoek leerling">
            </form>
        </div>

    <section class="py-1">


        <section class="flex align-center">
            <p class="bold">Filter op:</p>

            <div class="filter" name="student_class">
                <button class="filter-btn btn margin-x ">Klas</button>
                <div class="filter-content">
                    <a href="/timeout">Alle klassen</a>
                    @foreach($studentClasses as $class)
                        <a href="/timeout?student_class={{ $class }}">{{ $class }}</a>
                    @endforeach
                </div>
            </div>

            <div class="filter" name="session_date">
                <button class="filter-btn btn margin-x ">Datum</button>
                <div class="filter-content">
                    <a href="/timeout">Alle datums</a>
                    @foreach($sessionDates as $date)
                        <a href="/timeout?session_date={{ $date }}">{{ $date }}</a>
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            @if ($sessions->count())
            <table class="table mobile-table">
                <tr class="table-heading">
                    <th>Naam</th>
                    <th>Datum</th>
                    <th class="mobile-hide">Ruimte</th>
                    <th>Tijd</th>
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
                            <td class="mobile-hide">{{ $session->room->room_name }}</td>
                            
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
            <div class="pagination-links">
                {{ $sessions->links() }}
            </div>
            @else
            <p>Geen sessies gevonden</p>
            @endif
        </section>
        

    </section>
</x-app-layout>