<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{

    public function run()
    {
        \App\Models\User::insert([
            'name' => 'Anar Cəfərov',
            'email' => 'anarceferov1996@gmail.com',
            'role' => 'admin',
            'created_at' => now(),
            'age' => 24,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
 
        \App\Models\User::factory(15)->create();
    }
}
