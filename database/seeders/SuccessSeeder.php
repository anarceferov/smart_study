<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Success::factory(15)->create();

    }
}
