<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class EmployerFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'logo' => fake()->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
}
