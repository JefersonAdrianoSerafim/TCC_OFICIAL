<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name_team" => "INFO 22",
                "color_team" => "FF0000"
            ],
            [
                "name_user" => "MEC 22",
                "color_team" => "008000"
            ],
            [
                "name_user" => "MAMB 22",
                "color_team" => "0000FF"
            ]
        ];
        DB::table('teams')->insert($data);
    }
}
