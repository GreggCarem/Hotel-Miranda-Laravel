<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        return [
            'roomNumber' => $this->faker->unique()->numberBetween(1000, 9999), 
            'name' => $this->faker->word(),
            'bedType' => $this->faker->randomElement(['single', 'double', 'queen', 'king']),
            'facilities' => json_encode($this->faker->words(3)),
            'rate' => $this->faker->numberBetween(50, 300),
            'offerPrice' => $this->faker->numberBetween(40, 250),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'description' => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl(),
        ];
    
    }
}