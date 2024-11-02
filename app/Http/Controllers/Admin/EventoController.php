<?php

namespace App\Http\Controllers\Admin;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'NombreEvento' => 'required|string|max:255',
        'FechaEvento' => 'required|date',
        'DireccionEvento' => 'required|string|max:255',
        'LugarEvento' => 'required|string|max:255',
        'imagen_path' => 'nullable|image|max:2048', // Manejo de imágenes
    ]);

    // Guardar la imagen, si es proporcionada
    if ($request->hasFile('imagen_path')) {
        $imagePath = $request->file('imagen_path')->store('imagen_path', 'public');
        $validatedData['imagen_path'] = $imagePath;
    }

    // Crear el evento en la base de datos
    Evento::create($validatedData);

    return redirect()->back()->with('Alerta_Exito', 'Evento agregado exitosamente');
}

    public function eliminarEvento (Evento $evento){


        //Eliminar Evento al final 
        $evento->delete();

        return redirect('admin-ver_eventos');

    }

    public function mostrarPantallaEdicion(Evento $evento){

        return view ('/admin.editar_eventos', compact('evento'));
    }
    
    public function actualizarInfoEvento(Evento $evento, Request $request){
        $validatedData = $request->validate([
            'NombreEvento' => 'required|string|max:255',
            'FechaEvento' => 'required|date',
            'DireccionEvento' => 'required|string|max:255',
            'LugarEvento' => 'required|string|max:255',
            'imagen_path' => 'nullable|image|max:2048', // Manejo de imágenes
        ]);
    
        // Guardar la imagen, si es proporcionada
        if ($request->hasFile('imagen_path')) {
            $imagePath = $request->file('imagen_path')->store('imagen_path', 'public');
            $validatedData['imagen_path'] = $imagePath;
        }
        
        $validatedData['NombreEvento'] = strip_tags($validatedData['NombreEvento']);
        $validatedData['FechaEvento'] = strip_tags($validatedData['FechaEvento']);
        $validatedData['DireccionEvento'] = strip_tags($validatedData['DireccionEvento']);
        $validatedData['LugarEvento'] = strip_tags($validatedData['LugarEvento']);

        $evento->update($validatedData);

        //session(['IdEvento' => $evento->id]);
    
        return redirect('admin-ver_eventos')->with('Alerta_Exito', 'Se editó correctamente');

        


    }

}
