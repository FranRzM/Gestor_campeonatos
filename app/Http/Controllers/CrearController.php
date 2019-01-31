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

class CrearController extends Controller
{

    public function index () {

        return view('crear');
    }

//    public function creado (Request $request)
//    {
//
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//            $datos = $_POST['participante'];
//
////            $datos -> id = $request -> input('id');
//            $datos -> name = $request -> input('name');
//            $datos -> type = $request -> input('type');
//            $datos -> age = $request -> input('age');
//            $datos -> belt = $request -> input('belt');
//            $datos -> weight = $request -> input('weight');
//            $datos -> dojo = $request -> input('dojo');
//            $datos -> gender = $request -> input('gender');
//
//            $datos -> save();
//
//            return view('creado', ['datos']);
//        }
//    }
}