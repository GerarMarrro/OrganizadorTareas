<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table = 'tareas';
    protected $primaryKey = 'id_tarea';
    protected $fillable = ['titulo','descripcion','inicio',
    'duracion','tipoduracion','horainicio','importancia', 'estado'];
    public $timestamps = false;
}
