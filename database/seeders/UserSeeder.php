<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{

    public function run()
    {
    $user =  User::insert([
            'name' => 'Anar Cəfərov',
            'email' => 'anarceferov1996@gmail.com',
            'tel' => 994505279616,
            'created_at' => now(),
            'job' => 'DEV',
            'date_birth' => '1996-08-25',
            'age' => 25,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
 
        Role::create(['name' => 'Anar Ceferov']);

    }
}
