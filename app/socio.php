<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;
use Argentino\Libraries\DateHelper;

class Socio extends Model
{
    protected $table = 'socios';

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
	'deporte_id'];

    public function deporte()
    {
        return $this->belongsTo(Deporte::class);
    }
    
    public function changeDateToDB($value) 
    {
        return \Carbon\Carbon::parse($value)->format('d/m/Y');
    }    
    
    public function getFechaNacAttribute($value)
    {
        return DateHelper::formatToShow($value);
    }

    public function setFechaNacAttribute($value)
    {
        $this->attributes['fecha_nac'] = DateHelper::formatToDB($value);
    }    
    
    public function scopeFilter($query, $protector,$deporte_id)
    {
        if ($protector)
        {
            if($protector=-1)
                $protector=0;
            
            $query->where(function ($query) use ($protector)
            {
                $query->where('protector', '=', $protector);
            });
        }
        if ($deporte_id)
        {
            $query->where(function ($query) use ($deporte_id)
            {
                $query->where('deporte_id', '=', $deporte_id);
            });
        }        
    }
}
