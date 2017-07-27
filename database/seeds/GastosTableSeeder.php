<?php

use Illuminate\Database\Seeder;

class GastosTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('gastos')->insert([
          'num_factura' => '1',
          'proveedor' => 'Papita',
          'concepto' => 'Concepto',
          'fecha' => '2017-06-06',
          'monto' => '12',
          'fecha_pago' => '2017-06-06',
          'fecha_vencimiento' => '2017-06-06',
          'observacion' => 'Observacion',
      ]);

      DB::table('gastos')->insert([
          'num_factura' => '2',
          'proveedor' => 'Papita',
          'concepto' => 'Concepto',
          'fecha' => '2017-06-06',
          'monto' => '12',
          'fecha_pago' => '2017-06-06',
          'fecha_vencimiento' => '2017-06-06',
          'observacion' => 'Observacion',
      ]);

      DB::table('gastos')->insert([
          'num_factura' => '3',
          'proveedor' => 'Papita',
          'concepto' => 'Concepto',
          'fecha' => '2017-06-06',
          'monto' => '12',
          'fecha_pago' => '2017-06-06',
          'fecha_vencimiento' => '2017-06-06',
          'observacion' => 'Observacion',
      ]);
    }
}
