<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AmenityRoom extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'amenity_id'
    ];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_room')->using(AmenityRoom::class);
    }


    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'amenity_room')->using(AmenityRoom::class);
    }

}
