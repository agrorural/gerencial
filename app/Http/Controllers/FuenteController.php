<?php

namespace App\Http\Controllers;

use App\Fuente;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class FuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFuentes()
    {
        $fuentes = Fuente::select('item_fuente','des_fuente', 'year_fuente', 'ant_fuente', 'dev_fuente', 'porc_fuente')->get();

        for ($i=0; $i < $fuentes->count() ; $i++) {
            $fuentes[$i]->porc_fuente = $fuentes[$i]->porc_fuente . '%';
        }

        return Datatables::of($fuentes)->make(true);
    }

    public function getChartFuentes()
    {
        $tipos = Fuente::select('item_fuente as id', 'des_fuente as name', 'ant_fuente', 'dev_fuente', 'porc_fuente')
        ->distinct()
        ->orderBy('id', 'asc')
        ->get();

        // for ($i=0; $i < $tipos->count(); $i++) { 
        //     $tipos[$i]->data = Fuente::select('ant_fuente', 'dev_fuente', 'porc_fuente')
        //     ->where('item_fuente', '=', $tipos[$i]->id)->get();
        // }

        return $tipos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function show(Fuente $fuente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function edit(Fuente $fuente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuente $fuente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuente $fuente)
    {
        //
    }
}
