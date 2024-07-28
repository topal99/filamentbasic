<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add columns for icon, title, description
            'icon' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(),
        ];
    }
}
