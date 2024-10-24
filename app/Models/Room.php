<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'roomNumber', 'bedType', 'facilities', 'rate', 'offerPrice', 'status', 'description', 'photo'
    ];

    protected $casts = [
        'facilities' => 'array',
    ];

 
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}