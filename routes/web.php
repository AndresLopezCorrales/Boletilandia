<?php

use Carbon\Carbon;
use App\Models\Evento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pdf\PdfController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Boleto\BoletoController;
use App\Http\Controllers\Grafica\GraficaController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});

route::get('/home', [AdminController::class, 'index']);

Route::get('/home', function () {

    if(Auth::id()){
        $userType = Auth()->user()->usertype;

        if($userType == 'admin'){
            return view('admin.index');

        }else if($userType == 'user'){
            $fechaActual = Carbon::now()->format('Y-m-d');

            $events = Evento::where('FechaEvento', '>=', $fechaActual)
                        ->orderBy('FechaEvento', 'asc')
                        ->get();

            //$events = Evento::all();

            // Enviar los eventos a la vista
            return view('home.index', compact('events'));
            
        }
    }else{
        return redirect()->back();
    }


    
})->name('home');;

Route::post('/admin-eventos', [EventoController::class, 'store'])->middleware('admin');

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
})->middleware('admin')->name('admin-ver_eventos');

Route::delete('/admin-eliminar_eventos/{evento}', [EventoController::class, 'eliminarEvento'])->middleware('admin');

Route::get('admin-editar_eventos/{evento}',[EventoController::class, 'mostrarPantallaEdicion'])->middleware('admin')->name('admin.editar_evento');
Route::put('admin-editar_eventos/{evento}',[EventoController::class, 'actualizarInfoEvento'])->middleware('admin');

Route::get('home-pagina_eventos/{evento}',[HomeController::class, 'mostrarPaginaEvento'])->middleware('user');

Route::post('home-seleccionboleto_eventos/{evento}', [BoletoController::class, 'mostrarPantallaBoletos'])->middleware('user');

Route::post('/comprar-asiento', [BoletoController::class, 'comprarAsiento'])->middleware('user');

//Generar Pdf
Route::get('/pdf-boleto/{evento}', [PdfController::class, 'generarPdf'])->middleware('user');

//Ir a pagina de grafica de eventos - Admin
Route::get('/admin-grafica_eventos',[GraficaController::class, 'verGrafica'])->middleware('admin');