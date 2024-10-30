<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'uri'
    ];

    public function rooms(){
        return $this->belongsTo(Room::class);
    }
}
