<?php

use Illuminate\Database\Seeder;

class CuotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cuotas')->insert([
          'monto' => '250',
          'mes' => '3',
          'anio' => '2017',
          'socio_id' => '1',
          'fecha_pago' => '2017-06-06'
      ]);

      DB::table('cuotas')->insert([
          'monto' => '250',
          'mes' => '1',
          'anio' => '2017',
          'socio_id' => '2',
          'fecha_pago' => '2017-06-06'
      ]);

      DB::table('cuotas')->insert([
          'monto' => '250',
          'mes' => '4',
          'anio' => '2017',
          'socio_id' => '3',
          'fecha_pago' => '2017-06-06'
      ]);
    }
}
