<?php

namespace App\Http\Controllers\Pdf;

use Pdf;
use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function generarPdf(Evento $evento){
        $pdf = Pdf::loadView('home.pdf-boleto', compact('evento'));

        return $pdf->download('boleto.pdf');

        
    }
}
