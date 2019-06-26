<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Control Empleados
Route::resource('empleados','EmpleadosController');
Route::get('empleados/{idexpediente}/alergias' , 'EmpleadosController@alergias');
Route::get('empleados/{idexpediente}/horneros', 'EmpleadosController@horneros');
Route::get('empleados/{idexpediente}/expediente', 'EmpleadosController@expediente');
Route::post('empleados/nuevoExp', 'EmpleadosController@CrearExpediente');
Route::put('empleados/{id}/actualiza', 'EmpleadosController@ActualizarExp');

//Control Empleados-Reuniones
Route::resource('empleados/reunion', 'ReunionesController');
Route::post('empleados/reunion/crear', 'EmpleadosController@crearMinuta');
Route::post('empleados/reunion/inasistencia', 'EmpleadosController@inasistencia');
//Control Catalogos
Route::get('catalogo/clasica/naranja', 'CatalogoController@naranja');
Route::get('catalogo/country/campinafr', 'CatalogoController@campinafr');
Route::get('catalogo/country/rosa', 'CatalogoController@rosa');
Route::get('catalogo/moderna/eramoderna', 'CatalogoController@eramoderna');
Route::get('catalogo/moderna/ondasuave', 'CatalogoController@ondasuave');
Route::post('catalogo/crearColeccion', 'CatalogoController@crearColeccion');
Route::post('catalogo/crearPieza', 'CatalogoController@crearPieza');
Route::post('catalogo/crearVajilla', 'CatalogoController@crearVajilla');
Route::post('catalogo/llenarVajilla', 'CatalogoController@llenarVP');
//control clientes
Route::post('clientes/crear', 'ClientesController@crearCliente');
Route::post('clientes/pedido/{id}', 'ClientesController@pedido');
Route::post('clientes/factura', 'ClientesController@factura');
Route::post('clientes/contrato', 'ClientesController@contrato');