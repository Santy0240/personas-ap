<?php

namespace App\Http\Controllers;

use App\Models\pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paiscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$paises = pais::all();
        $paises = DB::table('tb_pais')
        ->select('tb_pais.*',"tb_pais.pais_codi")
        ->get();
        
      
        return view("pais.index",["paises"=>$paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = DB ::table('tb_pais')
        ->orderBy('pais_capi')
        ->get();
        return view("paises.new",["paises"=>$paises]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new pais(); 
        $pais->pais_nomb = $request->name;
        $pais->pais_codi = $request->code;
        $pais->save();

        $municipios = DB::table('tb_pais')
        ->join('tb_pais','tb_pais.pais_','=','tb_departamento.depa_codi')
        ->select('tb_municipio.*',"tb_departamento.depa_nomb")
        ->get();
        return view("municipio.index",["municipios"=>$municipios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
