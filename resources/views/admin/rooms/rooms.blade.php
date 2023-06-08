<x-app-layout>
    <div class="flex justify-between align-center">
        <h1 class="page-title">Kamers aanpassen</h1>
        <a class="edit" href="/admin/rooms/create">Nieuw</a>
    </div>
    
    <main class="main justify-center">
        

        <section>
        
            <div class="flex flex-column justify-center">

                

                @foreach ($rooms as $room)
                    <article class="box items-backlog margin-y padding flex justify-between">
                        <h2>
                            <a href="/rooms/{{ $room->id  }}">{{ $room->room_name }}</a>
                        </h2>

                        <div>
                            <a class="edit" href="/admin/rooms/{{ $room->id }}/edit">Edit</a>
                        </div>

                        <div >
                            <form action="/admin/rooms/{{ $room->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-warning">Verwijder</button>
                            </form>
                        </div>
                        
                    </article>
                @endforeach
            </div>
        </section>

        
</main>

    
</x-app-layout>