<?php
/**
 * Created by PhpStorm.
 * User: Elepc
 * Date: 30/01/2019
 * Time: 12:53
 */

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

use App\Models\Campeonato;

use App\Http\Controllers\ParticipanteController;

class CampeonatoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index () {

//        $campeonato = new Campeonato();
        $campeonatos = Campeonato::all();
        $i = 0;

        return view('campeonato', ['campeonatos' => $campeonatos, 'i' => $i]);
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

        $campeonato = new Campeonato();

        $campeonato -> name = $request -> input('name');
        $campeonato -> place = $request -> input('place');
        $campeonato -> date = $request -> input('date');
        $campeonato -> type = $request -> input('type');

        $campeonato -> save();

        return view('creadoCampeonato', ['campeonato' => $campeonato]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo ('Llega show'. $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $deleteCampeonato = Campeonato::find($id);

        $deleteCampeonato -> delete();

        $campeonato = new Campeonato();

        $campeonato -> name = $request -> input('name');
        $campeonato -> type = $request -> input('type');
        $campeonato -> place = $request -> input('place');
        $campeonato -> date = $request -> input('date');

        $campeonato -> save();

        return view('editadoCampeonato', ['campeonato' => $campeonato]);

    }

    public function editView($id) {

        $campeonato = Campeonato::find($id);

        return view('editarCampeonato', ['campeonato' => $campeonato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo ('llega update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campeonato = Campeonato::find($id);
//        $participante = Participante::all();
//
//        for ($i = 0; $i < $participante -> count(); $i ++) {
//            if ($participante[$i] -> id_campeonato === $id) {
//                Participante::find($participante[$i] -> id) -> delete();
//            }
//        }

        $campeonato -> delete();

        return view('eliminadoCampeonato');
    }
}