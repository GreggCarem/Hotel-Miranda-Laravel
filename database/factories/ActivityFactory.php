<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
            'user_id' => User::factory(),
            'datetime' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid' => $this->faker->boolean(),
            'notes' => $this->faker->paragraph(),
            'satisfaction' => $this->faker->optional()->randomElement([0,1,2,3,4,5,6,7,8,9,10])
            
        ];
    }
}