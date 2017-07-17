<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getPersonas(){
      $personas = Persona::select('des_tipo_persona','id_year', 'id_month', 'imp_patronal', 'imp_remuneracion', 'total_persona')->get();

      for ($i=0; $i < $personas->count() ; $i++) {
        switch ($personas[$i]->id_month) {
          case "01":
            $personas[$i]->id_month = 'Enero';
            break;
          case "02":
              $personas[$i]->id_month = 'Febrero';
              break;
          case "03":
              $personas[$i]->id_month = 'Marzo';
              break;
           case "04":
              $personas[$i]->id_month = 'Abril';
              break;
           case "05":
              $personas[$i]->id_month = 'Mayo';
              break;
           case "06":
              $personas[$i]->id_month = 'Junio';
              break;
           case "07":
              $personas[$i]->id_month = 'Julio';
              break;
           case "08":
              $personas[$i]->id_month = 'Agosto';
              break;
           case "09":
              $personas[$i]->id_month = 'Setiembre';
              break;
           case "10":
              $personas[$i]->id_month = 'Octubre';
              break;
           case "11":
              $personas[$i]->id_month = 'Noviembre';
              break;
           case "12":
              $personas[$i]->id_month = 'Diciembre';
              break;
          default:
            $personas[$i]->id_month = 'No hay fecha';
            break;
        }
        $personas[$i]->imp_patronal = number_format($personas[$i]->imp_patronal);
        $personas[$i]->imp_remuneracion = number_format($personas[$i]->imp_remuneracion);
      }

      // return $personas;

      return Datatables::of($personas)->make(true);
    }

    public function getChartPersonas(){
        $tipos = Persona::select('id_tipo_persona as id', 'des_tipo_persona as name')
        ->distinct()
        ->orderBy('id', 'asc')
        ->get();

        for ($i=0; $i < $tipos->count(); $i++) { 
            $tipos[$i]->data = Persona::select('id_month', 'imp_patronal', 'imp_remuneracion', 'total_persona')
            ->where('id_tipo_persona', '=', $tipos[$i]->id)->get();
        }

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
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
