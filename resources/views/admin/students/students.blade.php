<x-app-layout>

    <div class="flex justify-between align-center">
        <h1 class="page-title">Leerlingen aanpassen</h1>
        <a class="edit" href="/admin/students/create">Nieuw</a>
    </div>
    <main class="main justify-center">
        

        <section>
        
            <div class="flex flex-column justify-center">



                @foreach ($students as $student)
                    <article class="box items-backlog margin-y padding flex justify-between">
                        <h2>
                            <a href="/students/{{ $student->id  }}">{{ $student->student_name }}</a>
                        </h2>

                        <div>
                            <a class="edit" href="/admin/students/{{ $student->id }}/edit">Edit</a>
                        </div>

                        <div >
                            <form action="/admin/students/{{ $student->id }}" method="POST">
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