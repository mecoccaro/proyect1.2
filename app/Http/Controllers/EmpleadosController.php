<?php

namespace App\Http\Controllers;


use App\horneros;
use App\inasistencia;
use App\minuta;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Expediente;
use View;

class EmpleadosController extends Controller
{

    public function index()
    {
        $empleado = DB::table('empleado')
            ->select('*')
            ->get();
        return response()
            ->json($empleado);
    }



    public function show($id)
    {
        $empleado = DB::select('select e.nombre, e.apellido, e.fechanac, e.sexo, e.tiposangre, e.titulo, e.cargo, e.salario, e.id_supervisor from empleado e where e.idexpediente= ?', [$id]);

        return response()
            ->json([$empleado]);
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

        return response()->json('Actualizado');
    }


    public function destroy($idexpediente)
    {
        $empleado=Empleado::find($idexpediente);
        $empleado->delete();
        return response()->json('Eliminado');
    }
    public function alergias($idexpediente)
    {
        $e_sa = DB::select('select s.nombre, s.tipo, s.descripcion from e_sa i, salud_alergias s where i.id_empleado= ? and i.id_salud=s.id', [$idexpediente]);
        return response()
            ->json([$e_sa]);
    }

    public function horneros($idexpediente)
    {
        $hist_turno = DB::select('select e.fechainicio,e.motivo,e.totalhrsextradia,e.retrasos,e.observaciones from detalle_exp e, empleado emp where e.id_empleado = ? group by e.fechainicio,e.motivo,e.totalhrsextradia,e.retrasos,e.observaciones;', [$idexpediente]);
        return response()
            ->json([$hist_turno]);
    }

    public function expediente($idexpediente)
    {
        $expedientes = DB::select('select e.fechainicio, e.monto, e.motivo,e.totalhrsextradia, e.observaciones from detalle_exp e, empleado emp where e.id_empleado = ? group by e.fechainicio, e.monto, e.motivo,e.totalhrsextradia, e.observaciones;', [$idexpediente]);
        return response()
            ->json([$expedientes]);
    }

    public function CrearExpediente(Request $request)
    {
        $detalle_exp = new Expediente();
        $detalle_exp->id=$request->get('id');
        $detalle_exp->id_empleado=$request->get('id_empleado');
        $detalle_exp->fechainicio=$request->get('fechainicio');
        $detalle_exp->motivo=$request->get('motivo');
        $detalle_exp->retrasos=$request->get('retrasos');
        $detalle_exp->monto=$request->get('monto');
        $detalle_exp->totalhrsextradia=$request->get('totalhrsextradia');
        $detalle_exp->observaciones=$request->get('observaciones');

        $detalle_exp->save();

        return response()->json('Success');
    }

    public function ActualizarExp(Request $request,$id){

        $detalle_exp = Expediente::findorfail($id);
        $detalle_exp->id=$id;
        $detalle_exp->id_empleado=$request->input('id_empleado');
        $detalle_exp->fechainicio=$request->get('fechainicio');
        $detalle_exp->motivo=$request->get('motivo');
        $detalle_exp->retrasos=$request->get('retrasos');
        $detalle_exp->monto=$request->get('monto');
        $detalle_exp->totalhrsextradia=$request->get('totalhrsextradia');
        $detalle_exp->observaciones=$request->get('observaciones');

        $detalle_exp->save();
        return response()->json('Success');
    }

    public function crearMinuta(Request $request)
    {
        $reunion = new minuta();
        $reunion->id=$request->get('id');
        $reunion->id_empleado=$request->get('id_empleado');
        $reunion->fecha=$request->get('fecha');
        $reunion->obserminuta=$request->get('obserminuta');

        $reunion->save();

        return response()->json('success');
    }

    public function inasistencia(Request $request)
    {
        $inasistencia_reunion = new inasistencia();
        $inasistencia_reunion->id_reunion=$request->get('id_reunion');
        $inasistencia_reunion->id_reunionfecha=$request->get('id_reunionfecha');
        $inasistencia_reunion->id_reunionemp=$request->get('id_reunionemp');
        $inasistencia_reunion->id_empleado=$request->get('id_empleado');

        $inasistencia_reunion->save();

        return response()->json('success');
    }

    public function turnos(Request $request,$id_empleado)
    {
       /* $turnoanterior = DB::select('select h.fechainicio from hist_turno_men h, empleado e where h.id_empleado=? group by h.fechainicio',[$id_empleado]);
        $validateData =$request->validate([

        ]);*/
        $hist_turno_men = new horneros();
        $hist_turno_men->id_empleado=$request->get('id_empleado');
        $hist_turno_men->fechainicio=$request->get('fechainicio');
        $hist_turno_men->turno=$request->get('turno');
        $hist_turno_men->fechafin=$request->get('fechafin');
    }
}
