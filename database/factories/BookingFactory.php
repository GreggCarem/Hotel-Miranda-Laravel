<?php

namespace Database\Factories;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'userId' => \App\Models\User::factory(), 
            'roomId' => \App\Models\Room::factory(), 
            'startDate' => $this->faker->date(),
            'endDate' => $this->faker->date(),
            'totalAmount' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}