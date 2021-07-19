<?php

namespace Database\Factories;

use App\Models\Success;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuccessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Success::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 400, $height = 250 , 'cats'),
            'name' => $this->faker->sentence(3),
            'uni' => $this->faker->sentence(2),
            'faculty' => $this->faker->sentence(1),
            'degree' => $this->faker->sentence(1),
        ];
    }
}
