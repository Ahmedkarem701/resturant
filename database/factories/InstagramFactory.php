<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instagram>
 */
class InstagramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            'img'=>"instagram/$i.png",
            'link'=>$this->faker->url(),
        ];
    }
}
