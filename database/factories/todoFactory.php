<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todo>
 */
class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Assignment 1',
            'type' => 'Exam',
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'course' => 'Enterprise',
            'isComplete' => false,
        ];
    }
}
