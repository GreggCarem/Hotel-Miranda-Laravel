<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'message' => $this->faker->paragraph(),
            'email' => $this->faker->safeEmail(),
        ];
    }
}