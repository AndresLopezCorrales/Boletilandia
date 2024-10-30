<?php

use App\Models\Evento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pdf\PdfController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Boleto\BoletoController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home', [AdminController::class, 'index']);

Route::get('/home', function () {

    if(Auth::id()){
        $userType = Auth()->user()->usertype;

        if($userType == 'admin'){
            return view('admin.index');

        }else if($userType == 'user'){
            $events = Evento::all();

            // Enviar los eventos a la vista
            return view('home.index', compact('events'));
            
        }
    }else{
        return redirect()->back();
    }


    
});

Route::post('/admin-eventos', [EventoController::class, 'store']);

Route::get('/admin-ver_eventos', function(){
    if(Auth::id()){
        $userType = Auth()->user()->usertype;

        if($userType == 'admin'){
            $events = Evento::all();

            // Enviar los eventos a la vista
            return view('admin.ver_eventos', compact('events'));
        }
    }else{
        return redirect()->back();
    }
});

Route::delete('/admin-eliminar_eventos/{evento}', [EventoController::class, 'eliminarEvento']);

Route::get('admin-editar_eventos/{evento}',[EventoController::class, 'mostrarPantallaEdicion']);
Route::put('admin-editar_eventos/{evento}',[EventoController::class, 'actualizarInfoEvento']);

Route::get('home-pagina_eventos/{evento}',[HomeController::class, 'mostrarPaginaEvento']);

Route::post('home-seleccionboleto_eventos/{evento}', [BoletoController::class, 'mostrarPantallaBoletos']);

Route::post('/comprar-asiento', [BoletoController::class, 'comprarAsiento']);

//Generar Pdf
Route::get('/pdf-boleto/{evento}', [PdfController::class, 'generarPdf']);