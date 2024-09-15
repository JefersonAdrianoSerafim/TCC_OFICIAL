<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Here you can call other seeders
        // For example:
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(UserTeamSeeder::class);

        // $this->call(PostsTableSeeder::class);
        
        // You can also include direct seed logic here if necessary
    }
}
