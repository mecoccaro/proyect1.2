<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\contrato;
use App\factura;
use App\pedido;
use App\User;
use DemeterChain\A;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ClientesController extends Controller
{


    public function index()
    {
        $clientes = DB::select('select * from clientes');
        return response()
            ->json($clientes);
    }



    public function crearCliente(Request $request)
    {
        $clientes = new Cliente();
        $clientes->id=$request->input('id');
        $clientes->nombre=$request->input('nombre');
        $clientes->paisub=$request->input('paisub');
        $clientes->save();

        return response()->json('success');
    }

    public function pedido(Request $request,$id)
    {

        $pedido = new pedido();
        $pedido->id=$request->input('id');
        $pedido->id_cliente=$request->input('id_cliente');
        $pedido->fechapedido=$request->input('fechapedido');
        //$pedido->fechaentrega=$d;

        $pedido->save();
        return response()->json('success');
    }

    public function contrato(Request $request)
    {
        $contrato = new contrato();
        $contrato->id=$request->input('id');
        $contrato->id_cliente=$request->input('id_cliente');
        $contrato->fecha=$request->input('fecha');
        $contrato->descuento=$request->input('descuento');

        $contrato->save();

        return response()->json('success');
    }

    public function factura(Request $request)
    {
        $factura = new factura();
        $factura->numfactura=$request->input('numfactura');
        $factura->fechaemision=$request->input('fechaemision');

        //$calculo = new
        //$factura->total=$request->get('total');
    }


    public function show($id)
    {
        $clientes = DB::select('select c.nombre,c.paisub from clientes c where c.id = ?', [$id]);

        return response()
            ->json([$clientes]);
    }


    public function update(Request $request, $id)
    {
        $clientes=Cliente::find($id);
        $clientes->id=$request->input('id');
        $clientes->nombre=$request->input('nombre');
        $clientes->paisub=$request->input('paisub');
        $clientes->save();

        return response()->json('Actualizado');
    }


    public function destroy($id)
    {
        $clientes = User::findorfail($id);
        $clientes->delete();
        return response()->json('Eliminado');
    }
}
