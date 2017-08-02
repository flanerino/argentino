<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GastosTableSeeder::class);
        $this->call(SociosTableSeeder::class);
        $this->call(SolicitudesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DeportesTableSeeder::class);
        $this->call(CuotasTableSeeder::class);
    }
}
