<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'due_date' => now()
        ];
    }

    public function  completed(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => true
        ]);
    }
    public function uncompleted(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => false
        ]);
    }

    public function priority($level = 1): static
    {
        return $this->state(fn(array $attributes) => [
            'priority' => $level
        ]);
    }
}
