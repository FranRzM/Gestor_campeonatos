<?php
/**
 * Created by PhpStorm.
 * User: Elepc
 * Date: 30/01/2019
 * Time: 12:53
 */

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Campeonato;

class CrearParticipanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

        $campeonatos = Campeonato::all();


        return view('crearParticipante', ['campeonatos' => $campeonatos]);
    }
}