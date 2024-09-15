<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id_team_fk" => "1",
                "id_user_fk"=>"1",
                "creator_userteam" => true
            ],
            [
                "id_team_fk" => "2",
                "id_user_fk"=>"2",
                "creator_userteam" => true
            ],
            [
                "id_team_fk" => "3",
                "id_user_fk"=>"3",
                "creator_userteam" => true
            ]
        ];
                DB::table('user_teams')->insert($data);
    }
}
