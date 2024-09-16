<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Jeferson Adriano Serafim Filho",
                "email" => "jefersonadrianoserafimfilho@gmail.com",
                "password" => Hash::make("12345678")
            ],
            [
                "name" => "Thiago Silva",
                "email" => "thiagosilva@gmail.com",
                "password" => Hash::make("87654321"),
            ],
            [
                "name" => "Lucas Marques",
                "email" => "lucasmarques@gmail.com",
                "password" => Hash::make("12345678"),

            ],
            [
                "name" => "Raphael Quintanilha",
                "email" => "raphaelQuintanilha@gmail.com",
                "password" => Hash::make("12345678"),

            ]
        ];
        DB::table('users')->insert($data);
    }
}
