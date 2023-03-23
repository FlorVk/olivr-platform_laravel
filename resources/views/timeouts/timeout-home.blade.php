<x-app-layout>
    <h1 class="page-title">Overzicht time-outs</h1>

    <section class="flex align-center justify-between py-1">
        <div>
            <form class="search" action="/timeout" method="get">
                <input class="search-field" type="text" name="search" placeholder="Zoeken">
            </form>
        </div>
        <a class="btn btn-blue" href="">Nieuwe time-out</a>
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
                <tr class="table-row">
                    <td>Jonas Janssens</td>
                    <td>18/1/2023</td>
                    <td>Ruimte</td>
                    <td>13m6s</td>
                    <td>Ja</td>
                </tr>

                <tr class="table-row">
                    <td>Jonas Janssens</td>
                    <td>18/1/2023</td>
                    <td>Ruimte</td>
                    <td>13m6s</td>
                    <td>Ja</td>
                </tr>

                <tr class="table-row">
                    <td>Jonas Janssens</td>
                    <td>18/1/2023</td>
                    <td>Ruimte</td>
                    <td>13m6s</td>
                    <td>Ja</td>
                </tr>

                <tr class="table-row">
                    <td>Jonas Janssens</td>
                    <td>18/1/2023</td>
                    <td>Ruimte</td>
                    <td>13m6s</td>
                    <td>Ja</td>
                </tr>
            </tbody>
        </table>
        

    </section>
</x-app-layout>