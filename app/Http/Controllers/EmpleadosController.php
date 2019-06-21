<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class EmpleadosController extends Controller
{

    public function index()
    {
        $empleado = DB::table('empleado')
            ->select('*')
            ->get();
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

        return redirect('/');
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


   /* public function show($id)
    {

    }*/


   /* public function edit(Request $request,$idexpediente)
    {

    }*/


    public function update(Request $request,$idexpediente)
    {
        $empleado=Empleado::findOrFail($idexpediente);
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
        $empleado=Empleado::findOrFail($idexpediente);
        $empleado->delete();
        return Redirect::to('/');
    }
}
