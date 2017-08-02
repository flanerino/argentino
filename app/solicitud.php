<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
	
    protected $fillable=[
	'nombre',
	'apellido',
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
