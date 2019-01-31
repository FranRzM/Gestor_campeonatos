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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crear', 'CrearController@index');
Route::get('/campeonato', 'CampeonatoController@index');
Route::get('/ganadores', 'GanadoresController@index');
Route::post('/creado', 'CrearController@creado');
Route::resource('participante', 'ParticipanteController');