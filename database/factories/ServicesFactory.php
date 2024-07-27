<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_active' => $this->faker->boolean(),
            'titleservice' => $this->faker->sentence(),
            'subtitleservice' => $this->faker->sentence(),
            'titleservice1' => $this->faker->sentence(),
            'subtitleservice1' => $this->faker->sentence(),
            'titleservice2' => $this->faker->sentence(),
            'subtitleservice2' => $this->faker->sentence(),
            'titleservice3' => $this->faker->sentence(),
            'subtitleservice3' => $this->faker->sentence(),
            'titleservice4' => $this->faker->sentence(),
            'subtitleservice4' => $this->faker->sentence(),
            'titleservice5' => $this->faker->sentence(),
            'subtitleservice5' => $this->faker->sentence(),
            'titleservice6' => $this->faker->sentence(),
            'subtitleservice6' => $this->faker->sentence(),
        ];
    }
}
