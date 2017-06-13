<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuota extends Model
{
	protected $table = 'cuotas';
	
    protected $fillable=[
	'mes',
	'anio',
	'deportista_id',
	'fecha_pago'];
}
