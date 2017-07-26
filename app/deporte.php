<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table = 'deportes';

    protected $fillable = [
     'deporte',
     'cuota',
     'id_padre'
   ];
}
