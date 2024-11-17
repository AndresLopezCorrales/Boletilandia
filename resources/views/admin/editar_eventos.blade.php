<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('head')
</head>
<body class="bg-gray-50">

    @include('admin.nav_admin')
    
    <div class="flex flex-col justify-center items-center">
        <div class="px-4 my-4 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">Editar evento - {{$evento->NombreEvento}}</h1>
        </div>
    </div>

    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="px-8 mb-20 bg border-2 border-gray-950 p-4 rounded-3xl hover:border-blue-700 hover:bg-gray-100">
            <form action="/admin-editar_eventos/{{$evento->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="NombreEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Nombre del Evento:</label>
                <input type="text" name="NombreEvento" id="NombreEvento" value="{{$evento->NombreEvento}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <br>
                <label for="FechaEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Fecha del Evento:</label>
                <input type="date" name="FechaEvento" id="FechaEvento" value="{{$evento->FechaEvento}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <br>
                <label for="DireccionEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Dirección del Evento:</label>
                <input type="text" name="DireccionEvento" id="DireccionEvento" value="{{$evento->DireccionEvento}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                <br>
                <label for="LugarEvento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Lugar del Evento:</label>
                <input type="text" name="LugarEvento" id="LugarEvento" value="{{$evento->LugarEvento}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <br>
                <label for="imagen_path" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blue-700">Imagen del Evento:</label>
                <input type="file" name="imagen_path" id="imagen_path" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" accept=".jpg, .jpeg, .png" required>
                <br>
                <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Editar</button>
            </form>
        </div>
    </div>

    

    


</body>
</html>