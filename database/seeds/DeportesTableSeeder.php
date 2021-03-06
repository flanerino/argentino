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
            'deporte' => 'Protector',
            'cuota' => '150',
            'orden' => '1',
            'id_padre' => '1'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Basquet',
            'cuota' => '300',
            'orden' => '2',
            'id_padre' => '2'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formacion',
            'cuota' => '300',
            'orden' => '2->3',
            'id_padre' => '2'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '2->4',
            'id_padre' => '2'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Mayores',
            'cuota' => '300',
            'orden' => '2->5',
            'id_padre' => '2'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Futbol',
            'cuota' => '300',
            'orden' => '6',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formación',
            'cuota' => '300',
            'orden' => '6->7',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '6->8',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Sub 15',
            'cuota' => '300',
            'orden' => '6->9',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Sub 17',
            'cuota' => '300',
            'orden' => '6->10',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Primera',
            'cuota' => '300',
            'orden' => '6->11',
            'id_padre' => '6'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Pelota Paleta',
            'cuota' => '300',
            'orden' => '12',
            'id_padre' => '12'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Cesto',
            'cuota' => '300',
            'orden' => '13',
            'id_padre' => '13'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Formación',
            'cuota' => '300',
            'orden' => '13->14',
            'id_padre' => '13'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Menores',
            'cuota' => '300',
            'orden' => '13->15',
            'id_padre' => '13'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Categoría Mayores',
            'cuota' => '300',
            'orden' => '13->16',
            'id_padre' => '13'
        ]);

        DB::table('deportes')->insert([
            'deporte' => 'Bochas',
            'cuota' => '300',
            'orden' => '17',
            'id_padre' => '17'
        ]);
    }
}
