<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;
use Argentino\Libraries\DateHelper;

class Ingreso extends Model
{
    protected $table = 'ingresos';

    protected $fillable = [
      'concepto',
      'num_recibo',
      'fecha',
      'monto',
      'forma_pago',
      'fecha_cobro',
      'observacion'
    ];

    public function getFechaAttribute($value)
    {
        return DateHelper::formatToShow($value);
    }

    public function setFechaAttribute($value)
    {
        $this->attributes['fecha'] = DateHelper::formatToDB($value);
    }

    public function getFechaCobroAttribute($value)
    {
        return DateHelper::formatToShow($value);
    }

    public function setFechaCobroAttribute($value)
    {
        $this->attributes['fecha_cobro'] = DateHelper::formatToDB($value);
    }

    public function scopeFilter($query, $nrorecibo, $concepto)
    {
        if ($nrorecibo)
        {
            $query->where(function ($query) use ($nrorecibo)
            {
                $nrorecibo='%'.$nrorecibo.'%';
                $query->where('nrorecibo', 'LIKE', '%'.$nrorecibo.'%');
            });
        }
        if ($concepto)
        {
            $query->where(function ($query) use ($concepto)
            {
                $concepto='%'.$concepto.'%';
                $query->where('concepto', 'LIKE', $concepto);
            });
        }
    }
}
