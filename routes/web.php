<?php

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

Route::get('/', function () {

    return view('welcome');
});
// TIPOS DE DISPOSITIVOS
Route::get('/tipos_de_dispositivos', 'TiposDispositivosController@tiposDeDispositivos');
Route::get('/insertar_tipo_dispositivos','TiposDispositivosController@insertar_tipo_dispositivos');
Route::post('/insertar_tipo_dispositivos_guardar', 'TiposDispositivosController@insertar_tipo_dispositivos_guardar');
Route::post('/actualizar_tipo_dispositivos','TiposDispositivosController@actualizar_tipo_dispositivos');
Route::post('/actualizar_tipo_dispositivos_guardar','TiposDispositivosController@actualizar_tipo_dispositivos_guardar');
Route::post('/eliminar_tipo_dispositivos','TiposDispositivosController@eliminar_tipo_dispositivos');


// DISPOSITIVOS
Route::get('/dispositivos', 'DispositivosController@dispositivos');
Route::get('/agregar_dispositivo', 'DispositivosController@agregar_dispositivo');
Route::post('/agregar_dispositivo_guardar','DispositivosController@agregar_dispositivo_guardar');
Route::post('/actualizar_dispositivo','DispositivosController@actualizar_dispositivo');