<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home</title>
    @include('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-gray-50">
    

    @include('admin.nav_admin')

    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="px-16 my-16 text-center text-pretty">
            <h1 class="text-6xl text-blue-950">Agrega un evento</h1>
        </div>
        <div class="px-16 my-16 bg border-2 border-gray-950 p-4 rounded-3xl hover:border-blue-700 hover:bg-gray-100">
            <form action="/admin-eventos" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                <label for="NombreEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Nombre del Evento:</label>
                <input type="text" name="NombreEvento" id="NombreEvento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <label for="FechaEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Fecha del Evento:</label>
                <input type="date" name="FechaEvento" id="FechaEvento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <br>
                <label for="DireccionEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Dirección del Evento:</label>
                <textarea type="text" name="DireccionEvento" id="DireccionEvento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                <br>
                <label for="LugarEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Lugar del Evento:</label>
                <input type="text" name="LugarEvento" id="LugarEvento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <br>
                <label for="imagen_path" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Imagen del Evento:</label>
                <input type="file" name="imagen_path" id="imagen_path" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept=".jpg, .jpeg, .png" required>
                <br>
                <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Agregar Evento</button>
            </form>
        </div>
    </div>

    @if (Session::has('Alerta_Exito'))
    <script>
        Swal.fire({
            title: "Exito!",
            text: "{{ session('Alerta_Exito') }}",
            icon: "success"
        });
    </script>
    @endif
    
    {{-- 
    <form action="/admin-ver_eventos" class="admin-forms" method="GET">
        @csrf
        <button>Ver eventos</button>
    </form>

    <form action="/admin-grafica_eventos" class="admin-forms" method="GET">
        @csrf
        <button>Ventas de Eventos</button>
    </form>
    --}}
    
    
    
    

</body>
</html>