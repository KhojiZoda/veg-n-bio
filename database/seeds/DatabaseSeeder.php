<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'first_name' => 'Kojak',
          'last_name' => 'Zoda',
          'birthday' => '1996-04-28',
          'role' => 'admin',
          'status' => 'active',
          'email' => 'kabdullazoda@gmail.com',
          'password' => bcrypt('Oklm1234'),
          'address' => '10 rue Edouard Nortier',
          'gender' => 'Homme'
        ]);
    }
}
