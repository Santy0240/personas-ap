<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $comunas = Comuna::all();
       $comunas = DB::table('tb_comuna')
               ->join('tb_municipio','tb_comuna.muni_codi','=','tb_municipio.muni_codi')
               ->select('tb_comuna.*',"tb_municipio.muni_nomb")
               ->get();
        return view("comuna.index",["comunas"=>$comunas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = DB ::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();
        return view("comuna.new",["municipios"=>$municipios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
