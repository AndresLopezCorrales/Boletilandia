<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleto {{$evento->id}}. {{Session::get('letra_seccion')}} - {{Session::get('numero_asiento')}}</title>
    <style>

        #evento, #usuario, #asiento, #nota{
            text-align: center
        }

        #nota{
            color: red
        }
    </style>
</head>
<body>
    <h1 id="evento">{{$evento->NombreEvento}}</h1>
    <h2 id="usuario">Bienvenido, {{ Auth::user()->name}}</h2>

    <p>Ya estas listo para ir al concierto de <strong>{{$evento->NombreEvento}}!</strong></p>
    <p>Se llevará a cabo en: </p><br>
    <ul>
        <li><p><strong>Lugar: </strong>{{$evento->LugarEvento}}</p></li>
        <li><p><strong>Dirección: </strong>{{$evento->DireccionEvento}}</p></li>
        <li><p><strong>Fecha: </strong>{{$evento->FechaEvento}}</p></li>
    </ul>
    <p>Tus asientos son:</p> 
    <h2 id="asiento">{{Session::get('letra_seccion')}} - {{Session::get('numero_asiento')}}</h2><br>

    <p>Presenta esta hoja para atender al evento</p>
    <p id="nota">NOTA: SI NO SE PRESENTA CON ESTA HOJA, SE LE NEGARÁ LA ENTRADA</p>
</body>
</html>