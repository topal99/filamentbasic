<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //create array of images from dummy folder
        $images =[
            'img1.jpg',
            'img2.jpg',
            'img3.jpg',
            'img4.jpg',
            'img5.jpg',
            'img6.jpg',
            'img7.jpg',
            'img8.jpg',
            'img9.jpg',
            'img10.jpg',
        ];

        return [
            //fillable columns for title, description, category_id
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->unique()->randomElement($images),
            'category_id'=> \App\Models\PortofolioCategory::factory()->create()->id,
            // 'category_id'=>$this->faker->numberBetween(1, 5),
        ];
    }
}
