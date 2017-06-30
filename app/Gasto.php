<?php

namespace Argentino;

use Illuminate\Database\Eloquent\Model;

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
}
