<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table = 'deportes';

    protected $fillable = [
        'deporte',
        'cuota',
        'orden',
        'id_padre'
   ];
    
    public function getNombreTreeAttribute()
    {
        $cant = substr_count($this->orden,'>');

        $tree=str_repeat('____',$cant);
        
        if($tree)
            $tree=$tree.' ';

        return $tree.$this->deporte;
    }    
}
