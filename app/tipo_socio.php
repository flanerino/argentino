<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

class Tipo_Socio extends Model
{
    protected $table = 'tipo_socios';
	
    protected $fillable=[
	'tipo'];
}
