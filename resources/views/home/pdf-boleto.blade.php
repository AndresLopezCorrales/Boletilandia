<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>{{$evento->NombreEvento}}</h1>
    <h2>Bienvenido, {{ Auth::user()->name}}</h2>
    <h1>{{Session::get('letra_seccion')}} - {{Session::get('numero_asiento')}}</h1>
    <h1>{{$evento->NombreEvento}}</h1>
    <h1>{{$evento->LugarEvento}}</h1>
    <h1>{{$evento->DireccionEvento}}</h1>
    <h1>{{$evento->FechaEvento}}</h1>
    @if($evento->imagen_path)
        <img src="{{ asset('storage/' . $evento->imagen_path) }}" alt="{{ $evento->NombreEvento }}" style="width: 100px;">
    @endif
</body>
</html>