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

//Pagina para ver si la persona esta loggeada o no
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

route::get('/home', [AdminController::class, 'index']);//dependiendo del tipo de usuario, se mandará a su respectivo home

Route::get('/home', function () {

    if(Auth::id()){
        $userType = Auth()->user()->usertype;

        if($userType == 'admin'){
            return view('admin.index');

        }else if($userType == 'user'){

            //Acomodar eventos por fecha dependiendo de la fecha del servidor
            $fechaActual = Carbon::now()->format('Y-m-d');

            $events = Evento::where('FechaEvento', '>=', $fechaActual)
                        ->orderBy('FechaEvento', 'asc')
                        ->get();

            // Enviar los eventos a la vista
            return view('home.index', compact('events'));
            
        }
    }else{
        return redirect()->back();
    }
})->name('home');

//-------------ADMIN---------------

Route::post('/admin-eventos', [EventoController::class, 'store'])->middleware('admin'); //Admin - Agregar eventos a la BD

Route::get('/admin-ver_eventos', function(){
    if(Auth::id()){
        $userType = Auth()->user()->usertype;

        if($userType == 'admin'){

            //Acomodar eventos por orden asc en base a la fecha del servidor
            $fechaActual = Carbon::now()->format('Y-m-d');
            $events = Evento::where('FechaEvento', '>=', $fechaActual)
                        ->orderBy('FechaEvento', 'asc')
                        ->get();

            // Enviar los eventos a la vista
            return view('admin.ver_eventos', compact('events'));
        }
    }else{
        return redirect()->back();
    }
})->middleware('admin')->name('admin-ver_eventos'); //Admin - Ver eventos existentes

//Eliminar evento de la BD- ADMIN
Route::delete('/admin-eliminar_eventos/{evento}', [EventoController::class, 'eliminarEvento'])->middleware('admin');

//Mostrar página para editar eventos - ADMIN
Route::get('admin-editar_eventos/{evento}',[EventoController::class, 'mostrarPantallaEdicion'])->middleware('admin')->name('admin.editar_evento');

//Editar la información de la BD - ADMIN 
Route::put('admin-editar_eventos/{evento}',[EventoController::class, 'actualizarInfoEvento'])->middleware('admin');

//Ir a pagina de grafica de eventos - Admin
Route::get('/admin-grafica_eventos',[GraficaController::class, 'verGrafica'])->middleware('admin');

//-------------USER---------------

//Mostrar la página donde esta la información del evento seleccionado - USER
Route::get('home-pagina_eventos/{evento}',[HomeController::class, 'mostrarPaginaEvento'])->middleware('user');

//Mostrar la página para seleccionar el SVG del asiento del cocnierto - USER
Route::post('home-seleccionboleto_eventos/{evento}', [BoletoController::class, 'mostrarPantallaBoletos'])->middleware('user');

//Agregar asiento a la BD después de comprar un asiento
Route::post('/comprar-asiento', [BoletoController::class, 'comprarAsiento'])->middleware('user');

//Generar Pdf
Route::get('/pdf-boleto/{evento}', [PdfController::class, 'generarPdf'])->middleware('user');