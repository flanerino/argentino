<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deporte extends Model
{
    protected $table = 'deportes';
	
    protected $fillable=[
	'nombre_deporte',
	'cuota',
	'id_padre'];
}
