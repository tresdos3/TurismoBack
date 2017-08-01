<?php

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


// comentario
Route::get('api/comentario', 'ComentarioController@login');
Route::post('api/Rcomentario', 'ComentarioController@registro');

// ubicacion
Route::get('api/ubicacion', 'UbicacionController@ubicacion');

// tipo_servicio
Route::get('api/tipo_servicio', 'TiposervicioController@obtener');

//permisos_categoria
Route::get('api/permisos_categoria', 'PermisoscategoriaController@obtener');

//origen
Route::get('api/origen', 'OrigenController@obtener');

// lugar_interes
Route::get('api/lugar_interes', 'LugarinteresController@obtener');

// interes_usuario
Route::get('api/interes_usuario', 'InteresusuarioController@obtener');

//acciones_sistema
Route::get('api/acciones_sistema', 'AccionesController@obtener');

// autor
Route::get('api/autor', 'AutorController@obtener');

// motivo_exposicopn
Route::get('api/motivo_exposicion', 'AutorController@obtener');

// categoria_evento
Route::get('api/categoria_evento', 'CategoriaeventoController@obtener');

// categoria_lugar
Route::get('api/categoria_lugar', 'CategorialugarController@obtener');

// categoria_usuario
Route::get('api/categoria_usuario', 'CategoriausuarioController@obtener');

//evento_controller
Route::get('api/evento', 'EventoController@obtener');