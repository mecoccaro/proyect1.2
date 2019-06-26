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
        $coleccion->id=$request->get('id');
        $coleccion->nombre=$request->get('nombre');
        $coleccion->linea=$request->get('linea');
        $coleccion->categoria=$request->get('categoria');

        $coleccion->save();

        return response()->json('success');
    }

    public function crearPieza(Request $request)
    {
        $pieza = new pieza();
        $pieza->id=$request->get('id');
        $pieza->id_coleccion=$request->get('id_coleccion');
        $pieza->id_molde=$request->get('id_molde');
        $pieza->descripcion=$request->get('descripcion');

        $pieza->save();

        return response()->json('success');
    }

    public function crearVajilla(Request $request)
    {
        $vajilla = new vajilla();
        $vajilla->id=$request->get('id');
        $vajilla->nombre=$request->get('nombre');
        $vajilla->numpers=$request->get('numpers');
        $vajilla->descripcion=$request->get('descripcion');

        $vajilla->save();

        return response()->json('success');
    }

    public function llenarVP(Request $request)
    {
        $v_p = new vp();
        $v_p->id_vajilla=$request->get('id_vajilla');
        $v_p->id_pieza=$request->get('id_pieza');
        $v_p->cantidad=$request->get('cantidad');

        $v_p->save();

        return response()->json('success');
    }
}
