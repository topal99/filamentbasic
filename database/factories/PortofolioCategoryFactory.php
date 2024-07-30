<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PortofolioCategory>
 */
class PortofolioCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add columns for name
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->unique()->sentence(),
        ];
    }
}
