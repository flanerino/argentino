<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socio extends Model
{
    protected $table = 'socios';
	
    protected $fillable=[
	'nombre',
	'apellido',
	'nacionalidad',
	'fecha_nac',
	'email',
	'dni',
	'telefono',
	'domicilio',
	'domicilio_cobro',
	'estado_civil',
	'protector',
	'deporte_id',
	'tipo_socios_id'];
}
