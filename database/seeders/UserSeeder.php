<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert([
      'name'=> "Andrea",
      'surname'=>"Bilbilovska",
      'username'=>"ab29303",
      'email'=>"ab@gmail.com",
      'password'=>Hash::make("Ab12345+"),
      'date_of_birth'=> "1999-11-17"
    ]);

    }
}
