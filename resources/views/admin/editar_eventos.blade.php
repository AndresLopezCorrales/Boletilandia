<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/admin-editar_eventos/{{$evento->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="NombreEvento">Nombre del Evento:</label>
        <input type="text" name="NombreEvento" id="NombreEvento" value="{{$evento->NombreEvento}}" required>
        <br>
        <label for="FechaEvento">Fecha del Evento:</label>
        <input type="date" name="FechaEvento" id="FechaEvento" value="{{$evento->FechaEvento}}" required>
        <br>
        <label for="DireccionEvento">Dirección del Evento:</label>
        <input type="text" name="DireccionEvento" id="DireccionEvento" value="{{$evento->DireccionEvento}}" required>
        <br>
        <label for="LugarEvento">Lugar del Evento:</label>
        <input type="text" name="LugarEvento" id="LugarEvento" value="{{$evento->LugarEvento}}" required>
        <br>
        <label for="imagen_path">Imagen del Evento:</label>
        <input type="file" name="imagen_path" id="imagen_path">
        <br>
        <button type="submit">Editar</button>
    </form>

    


</body>
</html>