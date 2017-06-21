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
    }
}