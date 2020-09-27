<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\ArrayToXml\ArrayToXml;

/* Proveedores : SP GET todos los proveedores actualmente en desuso
* en la base local no hay tabla de proveedores (NombreProv - IDProv)
*/
Route::get("get/proveedoresSP", function(){
    $db = DB::select('EXEC pedidosuser.AllProveedores');
    return response()->json($db);
});

/* Pedidos: SP para vista Pedidos (descomentar al cambiar base al hosting) */
/*
Route::get("get/invxProvSp", function(Request $request){
    $db = DB::select('EXEC pedidosuser.SPObtenerInventarioCompradoProveedor ?, ?, ?',
    array($request->varidproveedor, $request->varfechaini, $request->varfechafin)); 
    return response() -> json($db);
});
*/

/* Cuando se use la base de datos subidos al host comentar esta función y descomentar
* el de arriba */
Route::get("get/SPdeprueba", function(Request $request){
    $data = DB::select('EXEC SPObtenerInventarioCompradoProveedor ?,?,?', 
    array($request->varidproveedor, $request->varfechaini, $request->varfechafin));
    return response()->json($data);
});
/******------------------------------------------------------- */

/* --Enviar XML -> SP */
/**
 * actualmente esta en desuso
 */

Route::get("get/XML", function(Response $response){
    $db = DB::select('EXEC <<SP:Post>> ?,?,?',
    array($request->Proveedor, $request->Estado, $request->Detalle));
    return null;
});