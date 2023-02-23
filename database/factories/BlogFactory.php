<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
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
            'img'=>"blog/$i.png",
            'date'=>$this->faker->date(),
            'name'=>json_encode([
                'en'=>$this->faker->word(),
                'ar'=>$this->faker->word(),
            ]),
            'description'=>json_encode([
                'en'=>$this->faker->text(20),
                'ar'=>$this->faker->text(20),
            ]),
        ];
    }
}
