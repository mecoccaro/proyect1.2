<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class CatalogoController extends Controller
{

    public function naranja(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=3 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion, c.cantidad from vajilla v, detalle d, v_p c, pieza p where v.id=5 or v.id=6 group by v.id,c.cantidad');
        return response()
            ->json([$piezas, $vajilla]);

    }

        public function campinafr(){
        $piezas = DB::select(' select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=7 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion, c.cantidad from vajilla v, detalle d, v_p c, pieza p where v.id=5 or v.id=6 group by v.id,c.cantidad');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function rosa(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=12 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion, c.cantidad from vajilla v, detalle d, v_p c, pieza p where v.id=5 or v.id=6 group by v.id,c.cantidad');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function eramoderna(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=14 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion, c.cantidad from vajilla v, detalle d, v_p c, pieza p where v.id=5 or v.id=6 group by v.id,c.cantidad');
        return response()
            ->json([$piezas, $vajilla]);
    }
    public function ondasuave(){
        $piezas = DB::select('select p.id, p.descripcion, h.preciobs from pieza p, historial_precio h where p.id_coleccion=13 and h.id_pieza=p.id');
        $vajilla = DB::select('select v.id, v.nombre, v.numpers, v.descripcion, c.cantidad from vajilla v, detalle d, v_p c, pieza p where v.id=5 or v.id=6 group by v.id,c.cantidad');
        return response()
            ->json([$piezas, $vajilla]);
    }
}
