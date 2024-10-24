<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Check if the user already exists before creating it
    User::firstOrCreate([
        'email' => 'test@example.com',
    ], [
        'name' => 'Test User',
        'password' => bcrypt('password123'), // Add a password here or use factory defaults
    ]);

    // Call other seeders
    $this->call([
        RoomSeeder::class,
        BookingSeeder::class,
        ContactSeeder::class,
    ]);
}
}