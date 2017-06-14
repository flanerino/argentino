<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    protected $table = 'solicitudes';
	
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
