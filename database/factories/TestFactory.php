<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eum velit unde animi at atque distinctio sequi minima, accusamus suscipit quia ducimus, alias exercitationem iste consectetur, deleniti voluptate sunt quos.',
        ];
    }
}
