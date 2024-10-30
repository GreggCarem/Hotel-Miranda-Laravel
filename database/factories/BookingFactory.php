<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guest' => $this->faker->name(),
            'orderdate' => $this->faker->dateTimeBetween('-1 years','now'),
            'checkin' => $this->faker->dateTimeBetween('-1 years','now'),
            'checkout' => $this->faker->dateTimeBetween('-1 years','now'),
            'specialrequest' => $this->faker->paragraph(),
            'room_id' => Room::factory(),
            'status' => $this->faker->randomElement(['In Progress','Check Out', 'Check In'])
   
        ];
    }
}
