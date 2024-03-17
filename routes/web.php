<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Http\Controllers\FormularioComunidadController;
use App\Http\Controllers\FormularioExternoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Inicio', function () {
    return view('Inicio');
});

Route::get('/Servicios', function () {
    return view('Servicios');
});

Route::get('/QuienesSomos', function () {
    return view('QuienesSomos');
});

Route::get('/Ubicacion', function () {
    return view('Ubicacion');
});
Route::get('/Reservas', function () {
    return view('Reservas');
});
Route::get('/ReservasExternos', function () {
    return view('ReservasExternos');
});
Route::post('enviar-correo',function(){
    Mail::to('chicaizaerik979@gmail.com')->send(new EnviarCorreo);
    return "Correo enviado exitosamente";
})->name('enviar-correo');

Route::post('/Reservas', [FormularioComunidadController::class, 'store'])->name('formulario.guardar');
Route::post('/ReservasExternos', [FormularioExternoController::class, 'store'])->name('formularioExterno.guardar');