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
Route::get('/crear-participante', 'CrearParticipanteController@index') -> name('crearParticipante');
Route::get('/crear-campeonato', 'CrearCampeonatoController@index') -> name('crearCampeonato');
Route::get('/campeonato', 'CampeonatoController@index') -> name('campeonato');
Route::post('/campeonato', 'CampeonatoController@store') -> name('creadoCampeonato');
Route::get('/ganadores', 'GanadoresController@index') -> name('ganadores');
Route::post('/creado', 'CrearParticipanteController@creado') -> name('creadoParticipante');
Route::get('/participante', 'ParticipanteController@index') -> name('participante');
Route::post('/participante', 'ParticipanteController@store') -> name('participante');
Route::put('/participante', 'ParticipanteController@edit') -> name('participante');
Route::post('/eliminar-participante', 'ParticipanteController@destroy') -> name('eliminarParticipante');
Route::get('/editar-participante', 'ParticipanteController@editView') -> name('editarParticipante');
Route::put('/campeonato', 'CampeonatoController@edit') -> name('campeonato');
Route::post('/eliminar-campeonato', 'CampeonatoController@destroy') -> name('eliminarCampeonato');
Route::get('/editar-campeonato', 'CampeonatoController@editView') -> name('editarCampeonato');