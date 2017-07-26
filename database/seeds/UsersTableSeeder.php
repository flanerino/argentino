<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'leo',
            'email' => 'leojtorres@gmail.com',
            'password' => bcrypt('q1w2e3r4'),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'fuato1@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
        ]);
    }
}
