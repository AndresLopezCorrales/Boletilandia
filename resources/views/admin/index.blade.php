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
    Admin page

    <form action="/admin-eventos" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="NombreEvento">Nombre del Evento:</label>
        <input type="text" name="NombreEvento" id="NombreEvento" required>
        <br>
        <label for="FechaEvento">Fecha del Evento:</label>
        <input type="date" name="FechaEvento" id="FechaEvento" required>
        <br>
        <label for="DireccionEvento">Dirección del Evento:</label>
        <input type="text" name="DireccionEvento" id="DireccionEvento" required>
        <br>
        <label for="LugarEvento">Lugar del Evento:</label>
        <input type="text" name="LugarEvento" id="LugarEvento" required>
        <br>
        <label for="imagen_path">Imagen del Evento:</label>
        <input type="file" name="imagen_path" id="imagen_path">
        <br>
        <button type="submit">Agregar Evento</button>
    </form>

    <form action="/admin-ver_eventos" class="admin-forms">
        @csrf
        <button>Ver eventos</button>
    </form>
    
    
    
    

</body>
</html>