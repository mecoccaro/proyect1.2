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
//Control Empleados-Reuniones
Route::resource('empleados/reunion', 'ReunionesController');
//Control Catalogos
Route::get('catalogo/clasica/naranja', 'CatalogoController@naranja');
Route::get('catalogo/country/campinafr', 'CatalogoController@campinafr');
Route::get('catalogo/country/rosa', 'CatalogoController@crosa');
Route::get('catalogo/moderna/eramoderna', 'CatalogoController@eramoderna');
Route::get('catalogo/moderna/ondasuave', 'CatalogoController@ondasuave');