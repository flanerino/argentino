<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;
use Argentino\Libraries\DateHelper;

class Gasto extends Model
{
    protected $table = 'gastos';

    protected $fillable = [
      'num_factura',
      'proveedor',
      'concepto',
      'fecha',
      'monto',
      'fecha_pago',
      'fecha_vencimiento',
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

    public function getFechaPagoAttribute($value)
    {
        return DateHelper::formatToShow($value);
    }

    public function setFechaPagoAttribute($value)
    {
        $this->attributes['fecha_pago'] = DateHelper::formatToDB($value);
    } 

    public function getFechaVencimientoAttribute($value)
    {
        return DateHelper::formatToShow($value);
    }

    public function setFechaVencimientoAttribute($value)
    {
        $this->attributes['fecha_vencimiento'] = DateHelper::formatToDB($value);
    }
    
    public function scopeFilter($query, $nrofactura,$proveedor,$concepto)
    {
        if ($nrofactura)
        {
            $query->where(function ($query) use ($nrofactura)
            {
                $nrofactura='%'.$nrofactura.'%';                
                $query->where('nrofactura', 'LIKE', '%'.$nrofactura.'%');
            });
        }
        if ($proveedor)
        {
            $query->where(function ($query) use ($proveedor)
            {
                $proveedor='%'.$proveedor.'%';
                $query->where('proveedor', 'LIKE', '%'.$proveedor.'%');
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
