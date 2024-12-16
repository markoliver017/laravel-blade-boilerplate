<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
