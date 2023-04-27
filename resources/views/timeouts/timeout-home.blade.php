<x-app-layout>
    <h1 class="page-title">Overzicht time-outs</h1>

    <section class="flex align-center justify-between py-1">
        <div>
            <form class="search" action="/timeout" method="get">
                <input class="search-field" type="text" name="search" placeholder="Zoeken">
            </form>
        </div>
        <a class="btn btn-blue" href="/timeout/create">Nieuwe time-out</a>
    </section>

    <section class="py-1">

        <form class="flex table-filter align-center" action="/timeout">
            <p class="bold">Filter op:</p>
            <input class="btn margin-x" type="submit" name="Klas" value="klas">
            <input class="btn margin-x" type="submit" name="Datum" value="datum">
        </form>


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
        

    </section>
</x-app-layout>