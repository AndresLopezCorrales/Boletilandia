<?php

namespace App\Http\Controllers\Boleto;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoletoController extends Controller
{
    public function mostrarPantallaBoletos(Evento $evento){

        return view('/home.seleccionboleto_eventos', compact('evento'));

    }
}
