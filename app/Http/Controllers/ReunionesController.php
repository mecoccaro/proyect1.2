<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReunionesController extends Controller
{

    public function index()
    {
        $Reuniones = DB::select('select * from reunion');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $Reuniones = Reunion::find($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
