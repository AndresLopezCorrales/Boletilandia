<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    @include('admin.nav_admin')
    
    <div class="h-36 flex flex-col justify-center items-center">
        <div class="px-4 my-4 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">Grafica Venta de Boletos</h1>
        </div>
    </div>

    <div class="min-h-screen flex flex-col justify-start items-center">
        <div id="container" class="px-10 my-28 w-screen"></div>
    </div>

    <script>
        var eventoKeys = @json(array_keys($resultados));
        var eventoValues = @json(array_values($resultados));
        //console.log(eventoKeys);
        //console.log(eventoValues);

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Venta totales - Eventos',
                align: 'left'
            },
            xAxis: {
                categories: eventoKeys,
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
                    data: eventoValues
                }
            ]
        });
    </script>


    
</body>
</html>