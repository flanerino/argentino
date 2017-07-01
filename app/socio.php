<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;
use Argentino\Deporte;

class Socio extends Model
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
	'deporte_id'];

  public function deporte(){

    return $this->belongsTo(Deporte::class);

  }

}
