<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name_category" => "TCA",
                "description_category" => "BLA BLA BLA BLA"
            ],
            [
                "name_category" => "CALCULAR",
                "description_category" => "BLA BLA BLA BLA"
            ],

        ];
        DB::table('categories')->insert($data);
    }
}
