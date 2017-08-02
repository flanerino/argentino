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
            'deporte' => 'Bascket',
            'cuota' => '300',
            'orden' => '1',          
            'id_padre' => '1'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formacion',
            'cuota' => '300',
            'orden' => '1->2',          
            'id_padre' => '1'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '1->3',          
            'id_padre' => '1'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Mayores',
            'cuota' => '300',
            'orden' => '1->4',          
            'id_padre' => '1'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Futbol',
            'cuota' => '300',
            'orden' => '5',          
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formación',
            'cuota' => '300',
            'orden' => '5->6',
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '5->7',          
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Sub 15',
            'cuota' => '300',
            'orden' => '5->8',          
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Sub 17',
            'cuota' => '300',
            'orden' => '5->9',          
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Primera',
            'cuota' => '300',
            'orden' => '5->10',          
            'id_padre' => '5'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Pelota Paleta',
            'cuota' => '300',
            'orden' => '11',          
            'id_padre' => '11'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Cesto',
            'cuota' => '300',
            'orden' => '12',          
            'id_padre' => '12'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formación',
            'cuota' => '300',
            'orden' => '12->13',          
            'id_padre' => '12'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '12->14',          
            'id_padre' => '12'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Mayores',
            'cuota' => '300',
            'orden' => '12->15',          
            'id_padre' => '12'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Bochas',
            'cuota' => '300',
            'orden' => '16',          
            'id_padre' => '16'
        ]);
    }
}
