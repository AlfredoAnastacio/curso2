<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
    	'matricula',
    	'paterno',
    	'materno',
    	'nombre',
    	'fecha_nacimiento',
    	'sexo',
    	'id_departamento',
    	'id_turno'
    ];

    public function Departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }

    public function Departamento()
    {
    	return $this->belongsTo('App\Turno');
    }
}
