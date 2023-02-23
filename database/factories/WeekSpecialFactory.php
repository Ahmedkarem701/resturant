<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeekSpecial>
 */
class WeekSpecialFactory extends Factory
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
            'img'=>"special/$i.png",
            'discount'=>$this->faker->numberBetween(1,3),
            'condition'=>json_encode([
                'en'=>$this->faker->text(10),
                'ar'=>$this->faker->text(10),
            ]),
            'offer'=>json_encode([
                'en'=>$this->faker->text(10),
                'ar'=>$this->faker->text(10),
            ]),
        ];
    }
}
