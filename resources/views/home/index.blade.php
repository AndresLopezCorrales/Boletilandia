<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    @include('head') {{--Imagen de tab de pagina--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{--Sweet Alert JS--}}

</head>
<body class="bg-gray-50">

    @include('home.nav_user') {{--Nav bar de User--}}

    {{--Carrusel de imagenes--}}
    <div class="logos pb-4 overflow-hidden flex justify-start items-center bg-slate-900 whitespace-nowrap group">
        
        {{-- Contenedor de las imágenes --}}
        <div class="logos-slide flex animate-slide m-2 group-hover:animation-paused">
            <img src="{{asset('storage/artistas/humbe.jpg')}}" alt="Imagen 1" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/wos.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/billie.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/radioheads.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/nsqk.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/exo.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/alvaro.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
        </div>

        {{-- DUPLICADO --}}
        <div class="logos-slide flex animate-slide m-2 group-hover:animation-paused">
            <img src="{{asset('storage/artistas/humbe.jpg')}}" alt="Imagen 1" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/wos.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/billie.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/radioheads.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/nsqk.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/exo.jpg')}}" alt="Imagen 2" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
            <img src="{{asset('storage/artistas/alvaro.jpg')}}" alt="Imagen 3" class="rounded-3xl h-48 min-w-40 ml-8 hover:scale-110 transition-transform duration-300">
        </div>
    </div>

    {{--Título 'Eventos'--}}
    <div class="flex flex-col justify-center items-center">
        <div class="px-16 my-16 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">Eventos</h1>
        </div>
    </div>

    {{--Ver eventos disponibles sacados de la base de datos--}}
    <div class="posters-container min-h-screen flex flex-wrap justify-center items-center">
        @if($events->isNotEmpty())
            @foreach($events as $event)
            {{--Redireccionar a pagina-eventos/id--}}
            <a href="/home-pagina_eventos/{{$event->id}}" class="p-4 mx-10 my-10 border-2 rounded-3xl border-blue-700 hover:bg-gray-100">
                <div class="">
                    <h2 class="text-3xl text-center pb-2 bold font-bold">{{ $event->NombreEvento }}</h2>
                    @if($event->imagen_path)
                        <img class="w-80 h-80 pb-3 rounded-lg hover:brightness-110" src="{{ asset('storage/' . $event->imagen_path) }}" alt="{{ $event->NombreEvento }}">
                    @endif
                    <p class="text-center font-bold pb-3">{{ $event->LugarEvento }}</p>
                    <p class="text-center text-gray-500">{{ $event->FechaEvento }}</p>
                </div>
            </a>
            @endforeach
        @else
            <p>No hay eventos disponibles.</p>
        @endif
    </div>

    {{--Sweet Alert para confirmar que la compra se realizó y descargar boleto de concierto--}}
    @if (Session::has('message') && Session::has('evento_id'))
    <script>
        var eventoId = {{ Session::get('evento_id') }};
        window.Swal.fire({
            title: "Comprado!",
            text: "Boleto Comprado. Descarga tu boleto dando 'OK'",
            icon: "success"
            }).then((result) =>{
                if(result.isConfirmed){
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var formPdf = document.createElement('form');
                    formPdf.style.display = 'none';
                    formPdf.method = 'GET';
                    formPdf.action = '/pdf-boleto/' + eventoId;

                    var inputTokenPdf = document.createElement('input');
                    inputTokenPdf.type = 'hidden';
                    inputTokenPdf.name = '_token';
                    inputTokenPdf.value = csrfToken;

                    document.body.appendChild(formPdf);

                    formPdf.submit();
                }
            });
    </script>

    @endif
</body>
</html>