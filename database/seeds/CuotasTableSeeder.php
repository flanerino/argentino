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
          'mes' => '3',
          'anio' => '2017',
          'deportista_id' => '1',
          'fecha_pago' => '10'
      ]);

      DB::table('cuotas')->insert([
          'mes' => '1',
          'anio' => '2017',
          'deportista_id' => '2',
          'fecha_pago' => '11'
      ]);

      DB::table('cuotas')->insert([
          'mes' => '4',
          'anio' => '2017',
          'deportista_id' => '3',
          'fecha_pago' => '12'
      ]);
    }
}
