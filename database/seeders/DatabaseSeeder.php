<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MessageSeeder::class,
            TestSeeder::class,
            BlogSeeder::class,
            CountrySeeder::class,
            CourseSeeder::class,
            EducationSeeder::class,
            ServiceSeeder::class,
            SuccessSeeder::class,
        ]);   
    }
}
