<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
    <h2>Eventos Existentes</h2>
    @if($events->count() > 0)
        @foreach($events as $event)
            <div class="evento" style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $event->NombreEvento }}</h3>
                <p><strong>Fecha:</strong> {{ $event->FechaEvento }}</p>
                <p><strong>Dirección:</strong> {{ $event->DireccionEvento }}</p>
                <p><strong>Lugar:</strong> {{ $event->LugarEvento }}</p>
                @if($event->imagen_path)
                    <img src="{{ asset('storage/' . $event->imagen_path) }}" alt="{{ $event->NombreEvento }}" style="width: 100px;">
                @endif
                <div>
                        
                        <p><a href="/admin-editar_eventos/{{$event->id}}">Editar</a></p>
                    
                    <form id="deleteForm" action="/admin-eliminar_eventos/{{$event->id}}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <button type="button" onclick="confirmDelete()">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay eventos disponibles.</p>
    @endif


    <script>
        function confirmDelete() {
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