<?php
/**
 * Created by PhpStorm.
 * User: Elepc
 * Date: 30/01/2019
 * Time: 12:53
 */

namespace App\Http\Controllers;


class GanadoresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view('ganadores');
    }
}