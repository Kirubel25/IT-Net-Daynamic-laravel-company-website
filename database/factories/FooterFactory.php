<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => 1,
            'adress' => $this->faker->word(),
            'short_description' => $this->faker->word(),
            'email' => $this->faker->email(),
            'facebook' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'copyright' => $this->faker->url(),
        ];
    }
}
