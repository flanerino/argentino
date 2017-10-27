<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
      DB::table('socios')->insert([
          'nro' => '1',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '2',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '3',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '4',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '5',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '6',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '7',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '8',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '9',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 1
      ]);

      DB::table('socios')->insert([
          'nro' => '10',
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'deporte_id' => $faker->numberBetween(1,16),
          'activo' => 0
      ]);
    }
}
