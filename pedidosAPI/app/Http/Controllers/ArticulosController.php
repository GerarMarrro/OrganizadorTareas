<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulos;

class ArticulosController extends Controller
{
    public function articuloXprov(Request $request){
        $idprov = $request -> FORMADEPESO;
        $articulo = Articulos::orderby('CODARTICULO', 'DESC')
                    -> proveedor($idprov)
                    -> paginate(4);
        
        return $articulo;
    }
}
