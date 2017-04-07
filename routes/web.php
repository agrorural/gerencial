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

Route::get('/persona', function () {
    return Persona::select('des_tipo_persona as tipo','id_year as año', 'id_month as mes', 'imp_patronal as patronal', 'imp_remuneracion as remuneración', 'total_persona as total')->get();
});

Route::get('/persona/chart', function () {
    return Persona::select('des_tipo_persona as labels','imp_remuneracion as data')->where('id_year', '=', '2017')->where('id_month', '=', '01')->get();
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/chart', 'ChartController@index');