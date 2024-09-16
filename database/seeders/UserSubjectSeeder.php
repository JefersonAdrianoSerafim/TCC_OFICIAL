<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id_user_fk" => "1",
                "id_subject_fk" => "1"

            ],
            [
                "id_user_fk" => "2",
                "id_subject_fk" => "2"

            ]

        ];
        DB::table('user_subjects')->insert($data);
    }
}
