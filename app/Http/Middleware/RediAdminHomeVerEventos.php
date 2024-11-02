<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
//use Illuminate\Support\Facades\Route;

class RediAdminHomeVerEventos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Obtiene el ID del evento de la ruta actual
       /*$eventoId = Session::get('IdEvento'); // Obtiene el parámetro 'evento' de la URL

    
       // Verifica si la URL anterior es la página de edición del evento
        if (URL::previous() === route('admin.editar_evento', ['evento' => $eventoId]))  {
            //return redirect()->route('admin-ver_eventos'); // Redirige a la página de inicio
            
                return redirect()->route('home');
            
            
        }
        if (URL::current() === route('admin-ver_eventos')) {
            // Verifica si la URL anterior es la ruta de la que deseas redirigir
            if (URL::previous() === route('admin.editar_evento', ['evento' => $eventoId])) {
                return redirect()->route('home'); // Redirige a la ruta deseada
            }
        }
        
            // Redirige a la página de inicio si vuelve a dar back desde eventos
            
        

        return $next($request);*/

        
    }
}
