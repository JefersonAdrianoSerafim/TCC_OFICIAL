<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name_subject" => "Desenvolvimento Web II",
                "teacher_subject" => "Gil Eduardo",
                "color_subject" => "008000",
                "startdate_subject" => now()->subDays(30),
                "enddate_subject" => now()->addDays(30),
                "id_team_fk" => "1",


            ],
            [
                "name_subject" => "Desenvolvimento Web II",
                "teacher_subject" => "Gil Eduardo",
                "color_subject" => "008000",
                "startdate_subject" => now()->subDays(30),
                "enddate_subject" => now()->addDays(30),
                "id_team_fk" => "1",


            ]

        ];
        DB::table('subjects')->insert($data);
    }
}
