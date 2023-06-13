<x-app-layout>
    <h1 class="page-title">Virtual Reality ruimtes</h1>

    @foreach($rooms as $room)
    <section class="margin-y-l">
        <h2>{{ $room->room_name }}</h2>

        <div class="flex py-1 mobile-vr">
            <div class="width-60 mobile-100">
                <img class="vr-item-image mobile-100 " src="{{  asset('storage/'. $room->room_image)  }}" alt="">
            </div>   
            <div class="flex flex-column justify-between width-40 mobile-100">
                <h3>Kamer info</h3>
                <p>{!! nl2br($room->room_description) !!}</p>
                

                <form action="/vr/submit" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">

                    <button type="submit" class="flex align-center btn btn-blue margin-y center width-40">
                        <svg class="nav-icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.25 3.24984H5.63333C5.88376 3.24371 6.12857 3.32457 6.32609 3.47863C6.52361 3.6327 6.66163 3.85046 6.71667 4.09484L9.555 16.4882C9.61004 16.7325 9.74806 16.9503 9.94558 17.1044C10.1431 17.2584 10.3879 17.3393 10.6383 17.3332H19.76C20.0075 17.3404 20.2499 17.2626 20.4471 17.1128C20.6442 16.963 20.784 16.7502 20.8433 16.5098L22.75 8.6665" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.417 8.6665H11.917" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.8623 22.2085H11.9706" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3623 22.2085H18.4706" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span class="font-white">Koop</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    @endforeach


</x-app-layout>