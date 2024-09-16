<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name_commitment" => "TCA",
                "description_commitment" => "BLA BLA BLA BLA BLA",
                "date_commitment" => now()->addDays(7),
                "id_subject_fk" => "1"

            ],
            [

                "name_commitment" => "CALCULOS",
                "description_commitment" => "BLA BLA BLA BLA BLA",
                "date_commitment" => now()->addDays(7),
                "id_subject_fk" => "2"

            ]

        ];
        DB::table('commitments')->insert($data);
    }
}
