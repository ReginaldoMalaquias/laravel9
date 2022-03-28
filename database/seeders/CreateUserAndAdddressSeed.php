<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;

class CreateUserAndAdddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Michael Bolt",
            "email" => "amigos2@a.com.br",
            "password" => Hash::make("13456"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Avenida ACM, 442"
        ]);
    }
}
