<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\Amenity;
use App\Models\AmenityRoom;
use App\Models\Booking;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //php artisan migrate:refresh --seed | #restaurar los seeder nuevamente
        User::factory(10)->create();
        Activity::factory(10)->create();
        Room::factory()
        ->hasPhotos(3) 
        ->create();
        Booking::factory(10)->create();
        
        Message::factory(10)->create();
    
        DB::table('amenities')->insert([
            ['name' => 'Air conditioner', 'icon' => 'build/images/imgs/roomdetails/air-conditioner.svg'], 
            ['name' => 'Breakfast', 'icon' => 'build/images/imgs/roomdetails/breakfast.svg'], 
            ['name' => 'Cleaning', 'icon' => 'build/images/imgs/roomdetails/cleaning.svg'], 
            ['name' => 'Grocery', 'icon' => 'build/images/imgs/roomdetails/grocery.svg'], 
            ['name' => 'Shop near', 'icon' => 'build/images/imgs/roomdetails/shop-near.svg'], 
            ['name' => 'High speed WiFi', 'icon' => 'build/images/imgs/roomdetails/wifi.svg'], 
            ['name' => 'Kitchen', 'icon' => 'build/images/imgs/roomdetails/kitchen.svg'],
            ['name' => 'Shower', 'icon' => 'build/images/imgs/roomdetails/shower.svg'],
            ['name' => 'Single bed', 'icon' => 'build/images/imgs/roomdetails/single-bed.svg'],
            ['name' => 'Towels', 'icon' => 'build/images/imgs/roomdetails/towels.svg']
        ]);

        $rooms = Room::all();
        $amenities = Amenity::all();

        if ($rooms->isEmpty() || $amenities->isEmpty()) {
            $this->command->error("Not enought .");
            return;
        }

        for ($i = 0; $i < 30; $i++) {
            $roomId = $rooms->random()->id;
            $amenityId = $amenities->random()->id;

            AmenityRoom::firstOrCreate([
                'room_id' => $roomId,
                'amenity_id' => $amenityId
            ]);
        }
      
    }
}