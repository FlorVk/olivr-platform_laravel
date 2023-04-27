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
            </div>

        </section>
        

    </x-app-layout>
