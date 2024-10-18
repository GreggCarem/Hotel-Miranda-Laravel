<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use Faker\Factory as Faker;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    
       
        $maxUserId = \App\Models\User::max('id');
    
       
        for ($i = 0; $i < 20; $i++) {
            Activity::create([
                'type' => $faker->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
                'user_id' => rand(1, $maxUserId), 
                'datetime' => $faker->dateTimeBetween('now', '+1 month'),
                'paid' => $faker->boolean,
                'notes' => $faker->sentence,
                'satisfaction' => $faker->numberBetween(0, 10),
            ]);
        }
    }
}