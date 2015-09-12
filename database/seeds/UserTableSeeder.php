<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
        	'email' => 'test@test.de',
        	'password' => bcrypt('admin'),
        	'remember_token' => str_random(10),
        ]);
    }
}
