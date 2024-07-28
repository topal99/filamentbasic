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
        $icons =[
            'dummy/icon1.svg',
            'dummy/icon2.svg',
            'dummy/icon3.svg',
            'dummy/icon4.svg',
            'dummy/icon5.svg',
            'dummy/icon6.svg',
        ];

        return [
            //add columns for icon, title, description
            'icon' => $this->faker->unique()->randomElement($icons),
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(),
        ];
    }
}
