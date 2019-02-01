<?php
/**
 * Created by PhpStorm.
 * User: Elepc
 * Date: 01/02/2019
 * Time: 11:58
 */

namespace App\Http\Controllers;


class CrearCampeonatoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

        return view('crearCampeonato');
    }
}