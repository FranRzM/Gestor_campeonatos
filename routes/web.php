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
//Route::get('/crear-campeonato', 'CrearCampeonatoController@index') -> name('crearCampeonato');
Route::get('/campeonato', 'CampeonatoController@index') -> name('campeonato');
//Route::post('/campeonato', 'CampeonatoController@index') -> name('campeonato');
Route::get('/ganadores', 'GanadoresController@index') -> name('ganadores');
Route::post('/creado', 'CrearParticipanteController@creado') -> name('creado');
Route::resource('/participante', 'ParticipanteController');