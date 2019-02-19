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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');
Route::get('/ganadores', 'GanadoresController@index') -> name('ganadores');



/** Rutas campeonatos */

Route::get('/crear-campeonato', 'CrearCampeonatoController@index') -> name('crearCampeonato');
Route::get('/campeonato', 'CampeonatoController@index') -> name('campeonato');
Route::post('/campeonato', 'CampeonatoController@store') -> name('creadoCampeonato');
Route::get('/eliminar-campeonato/{id}', 'CampeonatoController@destroy') -> name('eliminarCampeonato');
Route::post('/editar-campeonato/{id}', 'CampeonatoController@edit') -> name('editarCampeonato');
Route::get('/editar-campeonato/{id}', 'CampeonatoController@editView') -> name('editarCampeonato');

/** Rutas participantes */

Route::get('/crear-participante', 'CrearParticipanteController@index') -> name('crearParticipante');
Route::post('/creado', 'CrearParticipanteController@creado') -> name('creadoParticipante');
Route::get('/participante', 'ParticipanteController@index') -> name('participante');
Route::post('/participante', 'ParticipanteController@store') -> name('participante');
Route::get('/eliminar-participante/{id}', 'ParticipanteController@destroy') -> name('eliminarParticipante');
Route::post('/editar-participante/{id}', 'ParticipanteController@edit') -> name('editarParticipante');
Route::get('/editar-participante/{id}', 'ParticipanteController@editView') -> name('editarParticipante');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
