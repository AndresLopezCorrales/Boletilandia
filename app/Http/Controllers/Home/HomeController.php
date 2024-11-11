<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function mostrarPaginaEvento (Evento $evento){

        return view ('/home.pagina_eventos', compact('evento'));

    }
}
