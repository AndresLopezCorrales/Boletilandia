<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-gray-50">

    @include('admin.nav_admin')

    @if($events->count() > 0)
    <div class="flex flex-col justify-center items-center">
        <div class="px-16 my-16 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">Eventos Existentes</h1>
        </div>
    </div>

    <div class="min-h-screen flex flex-wrap justify-center items-center">
    
        @foreach($events as $event)
            <div class="evento p-4 mx-10 my-10 border-2 rounded-3xl border-blue-700 hover:bg-gray-100">
                <h2 class="text-3xl mb-2">{{ $event->NombreEvento }}</h2>
                <p><strong>Fecha:</strong> {{ $event->FechaEvento }}</p>
                <p class="break-words w-80"><strong>Dirección:</strong> {{ $event->DireccionEvento }}</p>
                <p class="mb-2"><strong>Lugar:</strong> {{ $event->LugarEvento }}</p>
                @if($event->imagen_path)
                    <img src="{{ asset('storage/' . $event->imagen_path) }}" alt="{{ $event->NombreEvento }}" class="w-80 h-80">
                @endif
                <div class="flex flex-col justify-start items-start">
                    <a href="/admin-editar_eventos/{{$event->id}}">
                        <div class="p-1 px-2 mt-2 mb-1 bg-blue-200 text-gray-950 rounded-3xl border-2 border-blue-700 hover:bg-blue-700 hover:text-white hover:border-blue-950">
                            Editar
                        </div>
                    </a>    

                    <div class="p-1 px-2 my-1 bg-red-200 text-gray-950 rounded-3xl border-2 border-red-700 hover:bg-red-700 hover:text-white hover:border-red-950">
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method ('DELETE')
                            <button type="button" onclick="confirmDelete({{ $event->id }})">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        
        @endforeach
    @else
        <p>No hay eventos disponibles.</p>
    @endif
</div>


    <script>
        function confirmDelete(eventId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("deleteForm").action = "/admin-eliminar_eventos/" + eventId;
                    document.getElementById("deleteForm").submit(); // Envía el formulario si el usuario confirma
                    Swal.fire({
                    title: "Deleted!",
                    text: "Evento Eliminado",
                    icon: "success"
                    });
                }
            });
        }
    </script>

    @if (Session::has('Alerta_Exito'))
    <script>
        Swal.fire({
            title: "Exito!",
            text: "{{ session('Alerta_Exito') }}",
            icon: "success"
        });
    </script>
    @endif

</body>
</html>