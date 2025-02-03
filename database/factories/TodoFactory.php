<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\UserFactory;

class ToDoFactory extends Factory   
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "due_date" => fake()->date(),
            "user_id" => UserFactory::factory(),
        ];
    }
}
