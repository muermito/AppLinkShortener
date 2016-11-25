<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('crearLink', 'HomeController@crearLink');
Route::get('registravisita/{id}', 'HomeController@registraVisita');
Route::get('listado_historico', 'HomeController@listado_historico');
Route::get('mostrar_detalle_url/{id}', 'HomeController@mostrarDetalleURL');
