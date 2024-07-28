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
            //add path from public img dummy folder
            'icon1.svg',
            'icon2.svg',
            'icon3.svg',
            'icon4.svg',
            'icon5.svg',
            'icon6.svg',
        ];

        return [
            //add columns for icon, title, description
            'icon' =>$icons[array_rand($icons)],
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
        ];
    }

    //get unique random icon from icons array
}
