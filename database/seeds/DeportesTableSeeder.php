<?php

use Illuminate\Database\Seeder;

class DeportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('deportes')->insert([
          'deporte' => 'Football',
          'cuota' => '300',
          'id_padre' => '0'
      ]);

      DB::table('deportes')->insert([
          'deporte' => 'Basket',
          'cuota' => '300',
          'id_padre' => '0'
      ]);

      DB::table('deportes')->insert([
          'deporte' => 'Voley',
          'cuota' => '300',
          'id_padre' => '0'
      ]);
    }
}
