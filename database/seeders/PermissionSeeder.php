<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{

    public function run()
    {
        $users      = ['user-index' , 'user-create' , 'user-store' , 'user-edit' , 'user-update' , 'user-destroy'];
        $blogs      = ['blog-index' , 'blog-create' , 'blog-store' , 'blog-edit' , 'blog-update' , 'blog-destroy'];
        $countries  = ['country-index' , 'country-create' , 'country-store' , 'country-edit' , 'country-update' , 'country-destroy'];
        $courses    = ['course-index' , 'course-create' , 'course-store' , 'course-edit' , 'course-update' , 'course-destroy'];
        $educations = ['education-index' , 'education-create' , 'education-store' , 'education-edit' , 'education-update' , 'education-destroy'];
        $services   = ['service-index' , 'service-create' , 'service-store' , 'service-edit' , 'service-update' , 'service-destroy'];
        $successes  = ['success-index' , 'success-create' , 'success-store' , 'success-edit' , 'success-update' , 'success-destroy'];


        foreach($blogs as $blog){
            DB::table('permissions')->insert([
                'name' => $blog,
                'guard_name' => 'web'
            ]);
        }

        foreach($countries as $country){
            DB::table('permissions')->insert([
                'name' => $country,
                'guard_name' => 'web'
            ]);
        }

        foreach($courses as $course){
            DB::table('permissions')->insert([
                'name' => $course,
                'guard_name' => 'web'
            ]);
        }

        foreach($educations as $education){
            DB::table('permissions')->insert([
                'name' => $education,
                'guard_name' => 'web'
            ]);
        }

        foreach($services as $service){
            DB::table('permissions')->insert([
                'name' => $service,
                'guard_name' => 'web'
            ]);
        }
        
        foreach($successes as $success){
            DB::table('permissions')->insert([
                'name' => $success,
                'guard_name' => 'web'
            ]);
        } 

        foreach($users as $user){
            DB::table('permissions')->insert([
                'name' => $user,
                'guard_name' => 'web'
            ]);
        } 
    }
}
