<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
	protected $table = 'cuotas';
	
    protected $fillable=[
	'mes',
	'anio',
	'deportista_id',
	'fecha_pago'];
}
