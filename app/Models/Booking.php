<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest',
        'orderdate',
        'checkin',
        'checkout',
        'ordertime',
        'specialrequest',
        'room_id',
        'status'
    ];

    public function rooms(){
        return $this->belongsTo(Room::class);
    }
}
