<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;
use Argentino\Libraries\DateHelper;

class Cuota extends Model
{
	protected $table = 'cuotas';

    protected $fillable=[
	'mes',
	'anio',
	'socio_id',
	'fecha_pago'];

	public function socio()
	{
			return $this->belongsTo(Socio::class);
	}

	public function getFechaPagoAttribute($value)
	{
			return DateHelper::formatToShow($value);
	}

	public function setFechaPagoAttribute($value)
	{
			$this->attributes['fecha_pago'] = DateHelper::formatToDB($value);
	}

}
