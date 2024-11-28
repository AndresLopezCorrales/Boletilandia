<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento {{$evento->NombreEvento}}</title>
    @include('head') {{--Imagen tab pagina--}}
</head>
<body class="bg-gray-50">
    
    @include('home.nav_user') {{--Incluir Nav bar de usuario--}}

    <div class="min-h-screen flex flex-row flex-wrap justify-center items-center">
        {{--Imagen de evento--}}
        <div class="">
            @if($evento->imagen_path)
                    <img class="h-[40.46875rem] w-[34.3125rem] p-4 rounded-xl" src="{{ asset('storage/' . $evento->imagen_path) }}" alt="{{ $evento->NombreEvento }}">
                @endif
        </div>
        {{--Informacion de evento + botón para comprar asiento--}}
        <div class="min-h-screen w-[34.3125rem] m-8 flex flex-col flex-wrap justify-start items-center rounded-lg border-2 border-blue-950 hover:border-blue-600 hover:bg-gray-100 group">
            <h1 class="text-center text-6xl text-bold mt-14 group-hover:text-blue-900">{{ $evento->NombreEvento }}</h1>
            <div class="mt-20">
                <p class="text-center text-gray-900 text-3xl mb-2"><strong>Dirección:</strong><br> {{ $evento->DireccionEvento }}</p>
                <p class="text-center text-gray-900 text-3xl mb-2"><strong>Lugar:</strong><br> {{ $evento->LugarEvento }}</p> 
                <p class="text-center text-gray-800 text-2xl mb-8"><strong>Fecha:</strong><br> {{ $evento->FechaEvento }}</p>
            </div>
            <form action="/home-seleccionboleto_eventos/{{$evento->id}}" method="post" class="">
                @csrf
                <button class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Comprar</button>
            </form>
        </div>
    </div>

</body>
</html>