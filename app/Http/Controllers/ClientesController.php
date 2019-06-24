<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = DB::select('select * from clientes');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->id=$request->get('id');
        $clientes->nombre=$request->get('nombre');
        $clientes->paisub=$request->get('paisub');
        $clientes->save();

        return Redirect::back();
    }


    public function show($id)
    {
        $clientes = Cliente::find($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $clientes=Cliente::find($id);
        $clientes->id=$request->get('id');
        $clientes->nombre=$request->get('nombre');
        $clientes->paisub=$request->get('paisub');
        $clientes->save();

        return Redirect::back();
    }


    public function destroy($id)
    {
        $clientes=Cliente::find($id);
        $clientes->delete();
        return Redirect::back();
    }
}
