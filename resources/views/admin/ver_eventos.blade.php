<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    
                    <form action="/admin-eliminar_eventos/{{$event->id}}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <button>Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay eventos disponibles.</p>
    @endif

</body>
</html>