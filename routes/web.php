<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;
use Illuminate\Support\Facades\Route;


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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/inicio',[CatalogoController::class,'inicio'])->name("inicio");
Route::get('/lista',[CatalogoController::class,'lista'])->name("lista");
Route::get('/agregar',[CatalogoController::class,'agregar'])->name("agregar");

Route::get('/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
Route::put('/edicion/{pelicula}', [CatalogoController::class, 'actualizar'])->name('actualizar');
Route::post('/insertar', [CatalogoController::class, 'insertar'])->name('insertar');
Route::get('/eliminar/{id}', [CatalogoController::class, 'eliminar'])->name('eliminar');


Route::get('/sesion',[LoginController::class,'sesion'])->name("sesion");
Route::post('/iniciar_sesion',[LoginController::class,'iniciar_sesion'])->name("iniciar_sesion");


Route::get('/registro',[RegistrarController::class,'registro'])->name("registro");
Route::post('/registro_usuario',[RegistrarController::class,'registro_usuario'])->name("registro_usuario");

Route::post('/cerrar_sesion', [LoginController::class, 'cerrar_sesion'])->name('cerrar_sesion');
