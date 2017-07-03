<?php

use Illuminate\Database\Seeder;

class SociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('socios')->insert([
          'nombre' => 'socio',
          'apellido' => 'socio',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1980-6-1',
          'email' => 'socio@gmail.com',
          'dni' => '39085467',
          'telefono' => '15534657',
          'domicilio' => 'Calle 25 N° 1123',
          'domicilio_cobro' => 'Calle 25 N° 1123',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '1',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio1',
          'apellido' => 'socio1',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1990-4-10',
          'email' => 'socio1@gmail.com',
          'dni' => '40805333',
          'telefono' => '15404040',
          'domicilio' => 'Calle 23 N° 999',
          'domicilio_cobro' => 'Calle 23 N° 999',
          'estado_civil' => '2',
          'protector' => '0',
          'deporte_id' => '1',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio2',
          'apellido' => 'socio2',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '2000-10-20',
          'email' => 'socio2@gmail.com',
          'dni' => '41987345',
          'telefono' => '15303030',
          'domicilio' => 'Calle 15 N° 432',
          'domicilio_cobro' => 'Calle 15 N° 432',
          'estado_civil' => '1',
          'protector' => '0',
          'deporte_id' => '1',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio3',
          'apellido' => 'socio3',
          'nacionalidad' => 'boliviano',
          'fecha_nac' => '1997-3-13',
          'email' => 'socio3@gmail.com',
          'dni' => '40000467',
          'telefono' => '15121345',
          'domicilio' => 'Calle 1 N° 112',
          'domicilio_cobro' => 'Calle 1 N° 112',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio4',
          'apellido' => 'socio4',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '2000-12-22',
          'email' => 'socio4@gmail.com',
          'dni' => '41222333',
          'telefono' => '15126598',
          'domicilio' => 'Calle 5 N° 540',
          'domicilio_cobro' => 'Calle 5 N° 540',
          'estado_civil' => '2',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio5',
          'apellido' => 'socio5',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1970-11-28',
          'email' => 'socio5@gmail.com',
          'dni' => '38145712',
          'telefono' => '15445566',
          'domicilio' => 'Calle 3 N° 666',
          'domicilio_cobro' => 'Calle 3 N° 666',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio6',
          'apellido' => 'socio6',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1970-11-28',
          'email' => 'socio6@gmail.com',
          'dni' => '38245712',
          'telefono' => '15465566',
          'domicilio' => 'Calle 6 N° 333',
          'domicilio_cobro' => 'Calle 6 N° 333',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio7',
          'apellido' => 'socio7',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1970-11-28',
          'email' => 'socio7@gmail.com',
          'dni' => '38245475',
          'telefono' => '15463766',
          'domicilio' => 'Calle 12 N° 555',
          'domicilio_cobro' => 'Calle 12 N° 555',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio7',
          'apellido' => 'socio7',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1971-9-27',
          'email' => 'socio7@gmail.com',
          'dni' => '38245124',
          'telefono' => '15419066',
          'domicilio' => 'Calle 40 N° 2150',
          'domicilio_cobro' => 'Calle 40 N° 2150',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);

      DB::table('socios')->insert([
          'nombre' => 'socio8',
          'apellido' => 'socio8',
          'nacionalidad' => 'argentino',
          'fecha_nac' => '1972-4-12',
          'email' => 'socio8@gmail.com',
          'dni' => '38234712',
          'telefono' => '15275566',
          'domicilio' => 'Calle 7 N° 1115',
          'domicilio_cobro' => 'Calle 7 N° 1115',
          'estado_civil' => '1',
          'protector' => '1',
          'deporte_id' => '2',
          'tipo_socios_id' => '1'
      ]);
    }
}
