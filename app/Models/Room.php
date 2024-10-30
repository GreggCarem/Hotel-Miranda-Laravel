<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'type_room',
        'description',
        'offer',
        'price',
        'discount',
        'cancellation',
        'status'
    ];

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function amenities(){
        return $this->belongsToMany(Amenity::class, 'amenity_room');
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    public function showRooms()
{
    $rooms = Room::with('photos')->get(); // Ensure 'photos' is loaded
    return view('your-view-name', compact('rooms'));
}
}
