<?php

namespace App\Http\Controllers\Grafica;

use App\Models\Seccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GraficaController extends Controller
{
    public function verGrafica(Request $request){

        $totalesPorEvento = Seccion::join('asientos', 'asientos.seccion_id', '=', 'seccions.id')
        ->join('eventos', 'eventos.id', '=', 'seccions.evento_id')
        ->where('asientos.disponibilidad_asiento', 0)
        ->groupBy('seccions.evento_id',     'eventos.NombreEvento')
        ->select('eventos.NombreEvento', DB::raw('SUM(seccions.precio) as total_precio'))
        ->get();

        // Formatear los resultados como un array con el nombre del evento como clave
        $resultados = $totalesPorEvento->pluck('total_precio', 'NombreEvento') ->map(function ($value) {
            return intval($value); // Convertir el valor a entero
        })->toArray();

        // Mostrar el resultado
        //dd($resultados); // O pasar 'resultadosFormateados' a la vista


        return view('admin.grafica_eventos', compact('resultados'));
    }
}
