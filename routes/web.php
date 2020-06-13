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
/*
Route::get('/', function () {

    return view('Login.login');
});*/
Route::GET("/", "LoginController@login");

//Login
Route::POST("/iniciar_sesion", "LoginController@iniciarSesion");
//Route::GET("/", "LoginController@inicioSesion");

//PANEL DE CONTROL
Route::GET("/inicio", "PanelController@dispPorUsuariosAsignados");
Route::GET('/inicio_panel', 'PanelController@inicio_panel');
Route::POST('/ver_usu_dispositivo{id_usuario}', 'PanelController@ver_usu_dispositivo');
Route::POST('/agregar_dispositivo_panel', 'PanelController@agregar_dispositivo_panel');
Route::POST('/quitar_dispositivo_panel', 'PanelController@quitar_dispositivo_panel');

//Usuarios
Route::GET('/usuarios', 'UsuarioController@usuarios');
Route::GET('/agregar_usuario', 'UsuarioController@agregar_usuario');
Route::POST('/agregar_usuario_guardar', 'UsuarioController@agregar_usuario_guardar');
Route::POST('/actualizar_usuario', 'UsuarioController@actualizar_usuario');
Route::POST('/actualizar_usuario_guardar', 'UsuarioController@actualizar_usuario_guardar');
Route::POST('/eliminar_usuario', 'UsuarioController@eliminar_usuario');
Route::POST('/asignacion_de_permisos_de_usuario', 'UsuarioController@asignacionDePermisosDeUsuario');
Route::POST('/agregar_permiso_usuario', 'UsuarioController@agregar_permiso_usuario');
Route::POST('/eliminar_permiso_usuario', 'UsuarioController@eliminar_permiso_usuario');

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
Route::post('/actualizar_dispositivo_guardar','DispositivosController@actualizar_dispositivo_guardar');
Route::post('/eliminar_dispositivo','DispositivosController@eliminar_dispositivo');

//COMANDOS
Route::GET('/comandos', 'ComandoController@comandos');
Route::GET('/agregar_comando', 'ComandoController@agregar_comando');
Route::POST('/agregar_comando_guardar', 'ComandoController@agregar_comando_guardar');
Route::POST('/actualizar_comando', 'ComandoController@actualizar_comando');
Route::POST('/actualizar_comando_guardar', 'ComandoController@actualizar_comando_guardar');
Route::POST('/eliminar_comando', 'ComandoController@eliminar_comando');

//PERMISO
Route::GET('/permisos', 'PermisoController@permisos');
Route::GET('/agregar_permiso', 'PermisoController@agregar_permiso');
Route::POST('/agregar_permiso_guardar', 'PermisoController@agregar_permiso_guardar');
Route::POST('/actualizar_permiso', 'PermisoController@actualizar_permiso');
Route::POST('/actualizar_permiso_guardar', 'PermisoController@actualizar_permiso_guardar');
Route::POST('/eliminar_permiso', 'PermisoController@eliminar_permiso');

//Historico
Route::POST('/guardar_historial', 'HistoricoController@guardar_historial');
Route::GET('/historico_listar', 'HistoricoController@historico_listar');