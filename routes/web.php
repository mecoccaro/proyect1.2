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
Route::get('/empleados', function () {
    return view('/empleado/empleados');
});
Route::get('/catalogo', function () {
    return view('/catalogo/catalogo');
});
Route::get('/clientes', function () {
    return view('/clientes/clientes');
});
Route::get('/expediente', function () {
    return view('/empleado/expediente');
});
Route::get('/minuta', function () {
    return view('/empleado/minuta');
});
Route::get('/turnoHornero', function () {
    return view('/empleado/turnoHornero');
});
Route::get('/registrarColeccion', function () {
    return view('/catalogo/registrarColeccion');
});
Route::get('/registrarPieza', function () {
    return view('/catalogo/registrarPieza');
});
Route::get('/registrarVajilla', function () {
    return view('/catalogo/registrarVajilla');
});
Route::get('/ventas', function () {
    return view('/ventas/ventas');
});
Route::get('/crearContrato', function () {
    return view('/ventas/crearContrato');
});
Route::get('/generarPedido', function () {
    return view('/ventas/generarPedido');
});
Route::get('/generarFactura', function () {
    return view('/ventas/generarFactura');
});
Route::get('/registrarCliente', function () {
    return view('/ventas/registrarCliente');
});
Route::get('/registrarBono', function () {
    return view('/empleado/expedientes/registrarBono');
});
Route::get('/registrarSancion', function () {
    return view('/empleado/expedientes/registrarSancion');
});
Route::get('/registrarAsistencia', function () {
    return view('/empleado/expedientes/registrarAsistencia');
});
Route::get('/registrarVP', function () {
    return view('/catalogo/registrarVP');
});
Route::get('/success', function () {
    return view('/registroSuccess');
});
Route::get('/inasistenciaMinuta', function () {
    return view('/empleado/inasistenciaMinuta');
});