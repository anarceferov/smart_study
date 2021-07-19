<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 400, $height = 250 , 'cats'),
            'single_image' => $this->faker->imageUrl($width = 400, $height = 250 , 'cats'),
            'name' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(10),
        ];
    }
}
