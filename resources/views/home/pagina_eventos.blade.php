<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div>
            <h3>{{ $evento->NombreEvento }}</h3>
                <p><strong>Fecha:</strong> {{ $evento->FechaEvento }}</p>
                <p><strong>Dirección:</strong> {{ $evento->DireccionEvento }}</p>
                <p><strong>Lugar:</strong> {{ $evento->LugarEvento }}</p>
                @if($evento->imagen_path)
                    <img src="{{ asset('storage/' . $evento->imagen_path) }}" alt="{{ $evento->NombreEvento }}" style="width: 100px;">
                @endif

                <form action="/home-seleccionboleto_eventos/{{$evento->id}}" method="post">
                    @csrf
                    <button>Comprar</button>
                </form>
            </div>

</body>
</html>