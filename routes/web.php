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

Route::get('/reportes', function () {
    return view('reportes');
});

	Route::get('/reportes/persona', function () {
    	return view('reportes.persona');
	});

Route::get('/graficas', function () {
    	return view('graficas');
	});

	Route::get('/graficas/persona', function () {
	    return view('graficas.persona');
	});



Route::get('/persona/datatable', 'PersonaController@getPersonas')->name('datatable.personas');

Route::get('/persona/graficas', 'PersonaController@getChartPersonas');