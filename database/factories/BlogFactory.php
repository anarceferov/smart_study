<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'blog_image' => $this->faker->imageUrl($width = 400, $height = 250 , 'cats'),
            'title' => $this->faker->sentence(3),
            'user_id' =>1,
            'content' => $this->faker->sentence(10),
            'slug' => $this->faker->slug(3),
            'status' => 'publish',
        ];
    }
}
