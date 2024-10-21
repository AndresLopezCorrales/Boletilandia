<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>

    <x-app-layout>
    </x-app-layout>

    <h1>USER</h1>

    <div class="posters-container" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
        @if($events->isNotEmpty())
            @foreach($events as $event)
            <a href="/home-pagina_eventos/{{$event->id}}">
                <div class="poster">
                    <h3>{{ $event->NombreEvento }}</h3>
                    <p><strong>Fecha:</strong> {{ $event->FechaEvento }}</p>
                    <p><strong>Dirección:</strong> {{ $event->DireccionEvento }}</p>
                    <p><strong>Lugar:</strong> {{ $event->LugarEvento }}</p>
                    @if($event->imagen_path)
                        <img src="{{ asset('storage/' . $event->imagen_path) }}" alt="{{ $event->NombreEvento }}">
                    @endif
                </div>
            </a>
            @endforeach
        @else
            <p>No hay eventos disponibles.</p>
        @endif
    </div>


</body>
</html>