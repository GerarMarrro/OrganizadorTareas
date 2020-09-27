<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tareas;

Route::get("get/Tareas", function(){
    $tareas = Tareas::all();
    return $tareas;
});
Route::get("get/Tarea/{id}", function($id){
    $tareas = Tareas::findOrFail($id);
    return $tareas;
});

Route::post("post/Tareas", function(Request $request){
    $data = $request->all();
    return Tareas::create([
        'titulo'=> $data['titulo'],
        'descripcion'=>$data['descripcion'],
        'inicio'=>$data['inicio'],
        'duracion'=>$data['duracion'],
        'tipoduracion'=>$data['tipoduracion'],
        'horainicio'=>$data['horainicio'],
        'importancia'=>$data['importancia'],
        'estado'=>$data['estado'],
    ]);
});

Route::put("put/Tarea/{id}", function(Request $request, $id){
    $data = Tareas::findOrFail($id);
    $data->update($request->all());

    return response()->json($data, 200);
});

Route::delete("delete/Tarea/{id}", function($id){
    $data = Tareas::findOrFail($id);
    if($data){
       $data->delete(); 
    }
    else{
        return response()->json(error);
    }
    return response()->json(null);
});