<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

    protected $model = User::class;

    public function definition()
    {
        return [
            // 'image' => $this->faker->imageUrl($width = 400, $height = 250),
            // 'cv' => $this->faker->imageUrl($width = 400, $height = 250),
            // 'tel' => 0500000000,
            // 'job' => 'DEV',
            // 'date_birth' => now(),
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'age' => rand(16,65)
        ];
    }

    public function unverified()
    {

    }
}
