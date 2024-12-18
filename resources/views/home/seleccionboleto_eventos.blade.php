<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comprar asiento {{$evento->NombreEvento}}</title> 
    @include('head'){{--Imagen de logo de tab de pagina--}}
    @vite([ '/resources/css/app.css', '/resources/js/get-attributes.js', '/resources/js/comprar-boleto.js', '/resources/css/home-style.css',])
</head>
<body class="bg-gray-50">

    @include('home.nav_user') {{--Nav bar de User--}}
    
    {{--Titulo 'Selecciona tu asiento'--}}
    <div class="flex flex-col justify-center items-center">
        <div class="px-16 my-16 text-center text-pretty">
            <h1 class="text-6xl text-blue-700">{{$evento->NombreEvento}} - Selecciona tu asiento</h1>
        </div>
    </div>

    <div class="min-h-screen flex flex-row flex-wrap justify-center items-center">
        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
        <svg class="h-[40.46875rem] w-[34.3125rem] p-8 rounded-xl" viewBox="0 0 172 158" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="sections" sketch:type="MSLayerGroup" transform="translate(16.000000, 1.000000)" stroke="#D8D8D8" fill="#D8D8D8">
                    <path d="M0,0 L155,0 L152.261719,62 L2.796875,62 L0,0 Z" id="Rectangle-1" sketch:type="MSShapeGroup"></path>
                    <path d="M15,62 L140,62 L137.566406,125 L18.4609375,125 L15,62 Z" id="Rectangle-1" sketch:type="MSShapeGroup"></path>
                </g>
                <g id="text" sketch:type="MSLayerGroup" transform="translate(0.000000, 4.000000)" font-weight="normal" font-family="Helvetica" fill="#000000" sketch:alignment="middle">
                    <text id="STAGE" sketch:type="MSTextLayer" font-size="20">
                        <tspan x="60.3408203" y="149">STAGE</tspan>
                    </text>
                    <text id="E" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="1.16503906" y="52">E</tspan>
                    </text>
                    <text id="F" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="1.44580078" y="38">F</tspan>
                    </text>
                    <text id="G" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="0.610839844" y="24">G</tspan>
                    </text>
                    <text id="H" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="1.88916016" y="10">H</tspan>
                    </text>
                    <text id="A" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="18.1650391" y="115">A</tspan>
                    </text>
                    <text id="B" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="18.1650391" y="101">B</tspan>
                    </text>
                    <text id="C" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="17.8891602" y="87">C</tspan>
                    </text>
                    <text id="D" sketch:type="MSTextLayer" font-size="10">
                        <tspan x="17.8891602" y="73">D</tspan>
                    </text>
                </g>
                <g id="seats" sketch:type="MSLayerGroup" transform="translate(21.000000, 6.000000)" stroke="#000000" fill="#000000">
                    
                    <!--SECCION H1-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H1" xlink:data-seccion="H" xlink:data-asiento="1" xlink:data-precio="500" xlink:data-visi="Muy lejos"><circle id="Oval-1" sketch:type="MSShapeGroup" cx="5" cy="5" r="5"></circle></a>
                    
                    <!--SECCION D-->
                    <a xlink:href="" class="asiento hover:fill-green-600" id="D1" xlink:title="D1" xlink:data-seccion="D" xlink:data-asiento="1" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D2" xlink:data-seccion="D" xlink:data-asiento="2" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D3" xlink:data-seccion="D" xlink:data-asiento="3" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D4" xlink:data-seccion="D" xlink:data-asiento="4" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D5" xlink:data-seccion="D" xlink:data-asiento="5" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D6" xlink:data-seccion="D" xlink:data-asiento="6" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D7" xlink:data-seccion="D" xlink:data-asiento="7" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="67" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="D8" xlink:data-seccion="D" xlink:data-asiento="8" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="67" r="5"></circle></a>
                    
                    <!--SECCION C-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C1" xlink:data-seccion="C" xlink:data-asiento="1" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C2" xlink:data-seccion="C" xlink:data-asiento="2" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C3" xlink:data-seccion="C" xlink:data-asiento="3" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C4" xlink:data-seccion="C" xlink:data-asiento="4" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C5" xlink:data-seccion="C" xlink:data-asiento="5" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C6" xlink:data-seccion="C" xlink:data-asiento="6" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C7" xlink:data-seccion="C" xlink:data-asiento="7" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="81" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="C8" xlink:data-seccion="C" xlink:data-asiento="8" xlink:data-precio="1000" xlink:data-visi="Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="81" r="5"></circle></a>
                    
                    <!--SECCION B-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B1" xlink:data-seccion="B" xlink:data-asiento="1" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B2" xlink:data-seccion="B" xlink:data-asiento="2" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B3" xlink:data-seccion="B" xlink:data-asiento="3" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B4" xlink:data-seccion="B" xlink:data-asiento="4" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B5" xlink:data-seccion="B" xlink:data-asiento="5" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B6" xlink:data-seccion="B" xlink:data-asiento="6" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B7" xlink:data-seccion="B" xlink:data-asiento="7" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="95" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="B8" xlink:data-seccion="B" xlink:data-asiento="8" xlink:data-precio="1000" xlink:data-visi="Muy Buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="95" r="5"></circle></a>
                    
                    <!--SECCION A-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A1" xlink:data-seccion="A" xlink:data-asiento="1" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A2" xlink:data-seccion="A" xlink:data-asiento="2" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A3" xlink:data-seccion="A" xlink:data-asiento="3" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A4" xlink:data-seccion="A" xlink:data-asiento="4" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A5" xlink:data-seccion="A" xlink:data-asiento="5" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A6" xlink:data-seccion="A" xlink:data-asiento="6" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A7" xlink:data-seccion="A" xlink:data-asiento="7" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="109" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="A8" xlink:data-seccion="A" xlink:data-asiento="8" xlink:data-precio="1000" xlink:data-visi="Excelente" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="109" r="5"></circle></a>
                    
                    <!--SECCION H-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H2" xlink:data-seccion="H" xlink:data-asiento="2" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H3" xlink:data-seccion="H" xlink:data-asiento="3" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H4" xlink:data-seccion="H" xlink:data-asiento="4" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H5" xlink:data-seccion="H" xlink:data-asiento="5" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H6" xlink:data-seccion="H" xlink:data-asiento="6" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H7" xlink:data-seccion="H" xlink:data-asiento="7" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H8" xlink:data-seccion="H" xlink:data-asiento="8" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H9" xlink:data-seccion="H" xlink:data-asiento="9" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="5" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="H10" xlink:data-seccion="H" xlink:data-asiento="10" xlink:data-precio="500" xlink:data-visi="Muy lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="140" cy="5" r="5"></circle></a>
                    
                    <!--SECCION G-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G1" xlink:data-seccion="G" xlink:data-asiento="1" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="5" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G2" xlink:data-seccion="G" xlink:data-asiento="2" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G3" xlink:data-seccion="G" xlink:data-asiento="3" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G4" xlink:data-seccion="G" xlink:data-asiento="4" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G5" xlink:data-seccion="G" xlink:data-asiento="5" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G6" xlink:data-seccion="G" xlink:data-asiento="6" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G7" xlink:data-seccion="G" xlink:data-asiento="7" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G8" xlink:data-seccion="G" xlink:data-asiento="8" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G9" xlink:data-seccion="G" xlink:data-asiento="9" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="19" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="G10" xlink:data-seccion="G" xlink:data-asiento="10" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="140" cy="19" r="5"></circle></a>
                    
                    
                    <!--SECCION F-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F1" xlink:data-seccion="F" xlink:data-asiento="1" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="5" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F2" xlink:data-seccion="F" xlink:data-asiento="2" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F3" xlink:data-seccion="F" xlink:data-asiento="3" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F4" xlink:data-seccion="F" xlink:data-asiento="4" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F5" xlink:data-seccion="F" xlink:data-asiento="5" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F6" xlink:data-seccion="F" xlink:data-asiento="6" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F7" xlink:data-seccion="F" xlink:data-asiento="7" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F8" xlink:data-seccion="F" xlink:data-asiento="8" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F9" xlink:data-seccion="F" xlink:data-asiento="9" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="33" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="F10" xlink:data-seccion="F" xlink:data-asiento="10" xlink:data-precio="500" xlink:data-visi="lejos" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="140" cy="33" r="5"></circle></a>
                    
                    <!--SECCION E-->
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E1" xlink:data-seccion="E" xlink:data-asiento="1" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="5" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E2" xlink:data-seccion="E" xlink:data-asiento="2" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="20" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E3" xlink:data-seccion="E" xlink:data-asiento="3" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="35" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E4" xlink:data-seccion="E" xlink:data-asiento="4" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="50" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E5" xlink:data-seccion="E" xlink:data-asiento="5" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="65" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E6" xlink:data-seccion="E" xlink:data-asiento="6" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="80" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E7" xlink:data-seccion="E" xlink:data-asiento="7" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="95" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E8" xlink:data-seccion="E" xlink:data-asiento="8" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="110" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E9" xlink:data-seccion="E" xlink:data-asiento="9" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="125" cy="47" r="5"></circle></a>
                    <a xlink:href="" class="asiento hover:fill-green-600" xlink:title="E10" xlink:data-seccion="E" xlink:data-asiento="10" xlink:data-precio="500" xlink:data-visi="buena" ><circle id="Oval-1" sketch:type="MSShapeGroup" cx="140" cy="47" r="5"></circle></a>
                </g>
            </g>
        </svg>

        {{--Donde aparece la info del siento después de clickear en un asiento del SVG--}}
        <div id="mostrarInfoAsiento" data-idEvento="{{$evento->id}}" class="min-h-screen w-[34.3125rem] m-8 flex flex-col flex-wrap justify-start items-center rounded-lg border-2 border-blue-950 hover:border-blue-600 hover:bg-gray-100 group">
            <h1 class="text-6xl text-center text-bold mt-14 group-hover:text-blue-900">Selecciona un Asiento</h1>
        </div>

    </div>

    <!--Obtener Datos del BoletoController:MostrarPantallaBoletos para usarlos en get-attributes.JS-->
    <script>
        window.eventoData = {
            evento: @json($evento),
            secciones: @json($secciones)
        };
    </script>

</body>
</html>