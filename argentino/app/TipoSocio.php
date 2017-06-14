<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_socio extends Model
{
    protected $table = 'tipo_socios';
	
    protected $fillable=[
	'tipo'];
}
