<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id_commitment_fk" => "1",
                "id_category_fk" => "1"
            ],
            [
                "id_commitment_fk" => "2",
                "id_category_fk" => "2"
            ]
        ];
        DB::table('commitment_categories')->insert($data);
    }
}
