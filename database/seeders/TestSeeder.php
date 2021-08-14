<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Test::factory(5)->create();
    }
}
