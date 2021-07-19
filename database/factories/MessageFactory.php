<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{

    protected $model = Message::class;


    public function definition()
    {
        $status = ['baxilir' , 'tamamlanib' , 'arasdirilir' , 'baxilmayib'];
        return [
            'name' => $this->faker->name(),
            'lastName' => $this->faker->lastName(),
            'topic' =>$this->faker->streetAddress(),
            'status' => 'baxilmayib',
            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eum velit unde animi at atque distinctio sequi minima, accusamus suscipit quia ducimus, alias exercitationem iste consectetur, deleniti voluptate sunt quos.',
        ];
    }
}
