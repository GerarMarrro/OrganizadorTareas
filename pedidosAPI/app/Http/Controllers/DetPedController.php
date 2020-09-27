<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetPed;

class DetPedController extends Controller
{
    public function filterDet(Request $request){
        $idprov = $request -> CODPROVEEDOR;
        $fechaini = $request -> FECHAPEDIDO;
        $fechafin = $request -> FECHAENTREGA;
        $detalle = DetPed::orderby('NUMSERIE', 'DESC')
        ->proveedor($idprov)
        ->fechainicio($fechaini)
        ->fechafinal($fechafin)
        ->paginate(4);
        return $detalle;
    }
}
