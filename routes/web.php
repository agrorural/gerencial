<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Persona;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona', 'PersonaController@getPersonas')->name('datatable.personas');

Route::get('/persona/chart', function () {
    $personas = Persona::select('des_tipo_persona as label','imp_remuneracion as data', 'id_tipo_persona as id_persona', 'id_month as mes')
        ->orderBy('id_persona')
        ->orderBy('mes')
    		->get();

        return $personas;
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/chart', 'ChartController@index');
