<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'short_title' => $this->faker->word(),
            'short_description' => $this->faker->word(),
            'long_description' => $this->faker->word(),
            'about_image' => $this->faker->image(),
        ];
    }
}
