<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            "name_user" => "Jeferson Adriano Serafim Filho",
            "email_user" => "jefersonadrianoserafimfilho@gmail.com",
            "password_user" => "12345"
        ],
        [
            "name_user" => "Thiago Silva",
            "email_user" => "thiagosilva@gmail.com",
            "password_user" => "67890",
        ],
        [
            "name_user" => "Lucas Marques",
            "email_user" => "lucasmarques@gmail.com",
            "password_user" => "67890",
            
        ],
        [
            "name_user" => "Raphael Quintanilha",
            "email_user" => "raphaelQuintanilha@gmail.com",
            "password_user" => "54321",

        ]
    ];
            DB::table('users')->insert($data);
    }
}
