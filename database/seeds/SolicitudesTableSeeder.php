<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SolicitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);

      DB::table('solicitudes')->insert([
          'nombre' => $faker->firstName,
          'apellido' => $faker->LastName,
          'fecha_nac' => $faker->date,
          'email' => $faker->email,
          'dni' => $faker->ean8,
          'telefono' => $faker->phoneNumber,
          'domicilio' => $faker->address,
          'domicilio_cobro' => $faker->address,
          'estado_civil' => $faker->numberBetween(1,4),
          'protector' => $faker->numberBetween(0,1),
          'deporte_id' => $faker->numberBetween(1,16),
          'tipo_socios_id' => $faker->numberBetween(0,1)
      ]);
    }
}