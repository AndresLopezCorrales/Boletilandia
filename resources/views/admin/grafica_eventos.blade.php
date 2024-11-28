<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas de Boleto-Grafica</title>
    @include('head') {{--Imagen tab pagina--}}
    <script src="https://code.highcharts.com/highcharts.js"></script> {{--Highcharts JS--}}
</head>
<body>
    @include('admin.nav_admin'){{--Nav bar admin--}}
    
    {{--Titulo 'Grafica Venta de Boletos'--}}
    <div class="h-36 flex flex-col justify-center items-center">
        <div class="px-4 my-4 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">Grafica Venta de Boletos</h1>
        </div>
    </div>

    {{--Donde estará la gráfica--}}
    <div class="min-h-screen flex flex-col justify-start items-center">
        <div id="container" class="px-10 my-28 w-screen"></div>
    </div>

    {{--Codigo de la gráfica--}}
    <script>
        var eventoKeys = @json(array_keys($resultados)); //Llaves de eventos (nombres)
        var eventoValues = @json(array_values($resultados)); //Valores de venta de cada concierto (cuanto se vendió)

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Venta totales - Eventos',
                align: 'left'
            },
            xAxis: {
                categories: eventoKeys, //Nombre evento
                crosshair: true,
                accessibility: {
                    description: 'Eventos'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Pesos Generados'
                }
            },
            tooltip: {
                valueSuffix: ' Pesos MX'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Eventos',
                    data: eventoValues //Dinero generado
                }
            ]
        });
    </script>

</body>
</html>