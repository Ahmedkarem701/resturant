<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientFeedback>
 */
class ClientFeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'job'=>$this->faker->word(),
            'feedback'=>json_encode([
                'en'=>$this->faker->text(25),
                'ar'=>$this->faker->text(25),
            ])
        ];
    }
}
