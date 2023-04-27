<x-app-layout>
    <h1 class="page-title">Virtual Reality ruimtes</h1>

    @foreach($rooms as $room)
    <section class="margin-y-l">
        <h2>{{ $room->room_name }}</h2>

        <div class="flex py-1">
            <div class="width-60">
                <img class="vr-item-image" src="{{  asset('placeholder.png')  }}" alt="">
            </div>   
            <div class="flex flex-column justify-between width-40">
                <h3>Room info</h3>
                <p>{{ $room->room_description }}</p>
                <a class="btn btn-blue margin-y" href="">Koop</a>
            </div>
        </div>
    </section>
    @endforeach


</x-app-layout>