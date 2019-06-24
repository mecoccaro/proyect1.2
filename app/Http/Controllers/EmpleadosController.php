<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\View\View;
use View;

class EmpleadosController extends Controller
{

    public function index()
    {
        $empleado = DB::table('empleado')
            ->select('*')
            ->get();
        return View::make('empleados.index')
            ->with('empleados',$empleado);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $empleado = new Empleado;
        $empleado->idexpediente=$request->get('idexpediente');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->apellido2=$request->get('apellido2');
        $empleado->fechanac=$request->get('fechanac');
        $empleado->sexo=$request->get('sexo');
        $empleado->tiposangre=$request->get('tiposangre');
        $empleado->titulo=$request->get('titulo');
        $empleado->cargo=$request->get('cargo');
        $empleado->id_supervisor=$request->get('id_supervisor');
        $empleado->save();

        return Redirect::back();//hacer un redirect a una vista para poner alergias
    }



    public function show($id)
    {

    }


    public function edit($idexpediente)
    {

    }


    public function update(Request $request,$idexpediente)
    {
        $empleado=Empleado::find($idexpediente);
        $empleado->idexpediente=$request->get('idexpediente');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->apellido2=$request->get('apellido2');
        $empleado->fechanac=$request->get('fechanac');
        $empleado->sexo=$request->get('sexo');
        $empleado->tiposangre=$request->get('tiposangre');
        $empleado->titulo=$request->get('titulo');
        $empleado->cargo=$request->get('cargo');
        $empleado->id_supervisor=$request->get('id_supervisor');

        $empleado->save();
    }


    public function destroy($idexpediente)
    {
        $empleado=Empleado::find($idexpediente);
        $empleado->delete();
        return Redirect::back();
    }
    public function alergias($idexpediente)
    {
        $e_sa = DB::table('e_sa')
            ->where('id_empleado', $idexpediente)
            ->get();
    }

    public function horneros($idexpediente)
    {
        $hist_turno = DB::table('hist_turno_men')
            ->where('id_empleado', $idexpediente)
            ->get();
    }

    public function expediente($idexpediente)
    {
        $expedientes = DB::table('detale_exp')
            ->where('id_empleado', $idexpediente)
            ->get();
    }
}
