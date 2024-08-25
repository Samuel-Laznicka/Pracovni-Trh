<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

class JobFactory extends Factory
{

    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['30.000 CZK', '40.000 CZK', '50.000 CZK']),
            'workPlace' => fake()->randomElement(['Práce z domova', 'Hybridní práce', 'Práce na místě']),
            'emplType' => fake()->randomElement(['Práce na plný úvazek', 'Práce na částečný úvazek']),
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
