<?php

namespace App\Http\Controllers;

use App\coleccion;
use App\pieza;
use App\vajilla;
use App\vp;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use View;

class CatalogoController extends Controller
{

    public function naranja(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=3 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion 
                                from vajilla v, detalle d, v_p c, pieza p 
                                where v.id=1 or v.id=2
                                group by v.id;');
        return response()
            ->json([$piezas, $vajilla]);

    }

        public function campinafr(){
        $piezas = DB::select(' select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=7 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion 
                                from vajilla v, detalle d, v_p c, pieza p 
                                where v.id=3 or v.id=4
                                group by v.id;');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function rosa(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=12 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion 
                                from vajilla v, detalle d, v_p c, pieza p 
                                where v.id=5 or v.id=6
                                group by v.id;');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function eramoderna(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=14 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion 
                                from vajilla v, detalle d, v_p c, pieza p 
                                where v.id=7 or v.id=8
                                group by v.id;');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function ondasuave(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=13 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion 
                                from vajilla v, detalle d, v_p c, pieza p 
                                where v.id=9 or v.id=10
                                group by v.id;');
        return response()
            ->json([$piezas, $vajilla]);
    }

    public function crearColeccion(Request $request)
    {
        $coleccion = new coleccion();
        $coleccion->id=$request->input('id');
        $coleccion->nombre=$request->input('nombre');
        $coleccion->linea=$request->input('linea');
        $coleccion->categoria=$request->input('categoria');

        $coleccion->save();

        return response()->json('success');
    }

    public function crearPieza(Request $request)
    {
        $pieza = new pieza();
        $pieza->id=$request->input('id');
        $pieza->id_coleccion=$request->input('id_coleccion');
        $pieza->id_molde=$request->input('id_molde');
        $pieza->descripcion=$request->input('descripcion');

        $pieza->save();

        return response()->json('success');
    }

    public function crearVajilla(Request $request)
    {
        $vajilla = new vajilla();
        $vajilla->id=$request->input('id');
        $vajilla->nombre=$request->input('nombre');
        $vajilla->numpers=$request->input('numpers');
        $vajilla->descripcion=$request->input('descripcion');

        $vajilla->save();

        return response()->json('success');
    }

    public function llenarVP(Request $request)
    {
        $v_p = new vp();
        $v_p->id_vajilla=$request->input('id_vajilla');
        $v_p->id_pieza=$request->input('id_pieza');
        $v_p->cantidad=$request->input('cantidad');

        $v_p->save();

        return response()->json('success');
    }
}
