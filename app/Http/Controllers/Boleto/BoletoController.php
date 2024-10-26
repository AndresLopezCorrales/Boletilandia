<?php

namespace App\Http\Controllers\Boleto;

use App\Models\Evento;
use App\Models\Asiento;
use App\Models\Seccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoletoController extends Controller
{
    public function mostrarPantallaBoletos(Evento $evento){

        return view('/home.seleccionboleto_eventos', compact('evento'));

    }

    public function comprarAsiento(Request $request) {
    
        // Validar los datos recibidos del formulario
        $validated = $request->validate([
            'numero_asiento' => 'required|integer',
            'letra_seccion' => 'required|string',
            'precio' => 'required|numeric',
            'info-visibilidad' => 'required|string',
            'id_evento' => 'required|integer'
        ]);
    
        // Verificar si la sección ya existe para este evento
        $seccion = Seccion::firstOrCreate([
            'evento_id' => $validated['id_evento'],
            'letra_seccion' => $validated['letra_seccion'],
        ], [
            'precio' => $validated['precio'],
            'info-visibilidad' => $validated['info-visibilidad'],
        ]);

        $asientoExistente = Asiento::where([
            'seccion_id' => $seccion->id,
            'numero_asiento' => $validated['numero_asiento'],
            'disponibilidad_asiento' => 0 // Chequear si ya está ocupado
        ])->exists();
    
        if ($asientoExistente) {
            // Redireccionar con un mensaje de error
            return redirect('/home');
            
        }

    
        // Guardar el asiento
        Asiento::create([
            'seccion_id' => $seccion->id,
            'numero_asiento' => $validated['numero_asiento'],
            'disponibilidad_asiento' => 0  // Marcamos como ocupado el asiento
        ]);
    
        // Redireccionar o devolver una respuesta exitosa
        //PONER QUE SE COMPRó exitosamente
        return redirect('/home');
    
    }
    
}
