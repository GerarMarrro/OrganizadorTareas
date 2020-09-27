<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function getProveedores(){
        return Proveedor::all();
    }
    
    public function AllProveedores(){
        
        $proveedores = Proveedor::Procedimiento();
        return response()->json($proveedores);
    }
}
