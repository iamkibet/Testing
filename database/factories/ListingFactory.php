<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'tags' => $this->faker->words(4, true), // Generates a string with 4 random words
            'company' => $this->faker->company(),
            'locaation' => $this->faker->city() . ', ' . $this->faker->stateAbbr(),
            'email' => $this->faker->companyEmail(),
            'description' => $this->faker->paragraphs(3, true), // Generates 3 paragraphs of text
        ];
    }
}
