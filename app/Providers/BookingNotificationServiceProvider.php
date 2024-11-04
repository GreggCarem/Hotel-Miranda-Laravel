<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use App\Models\Booking;

class BookingNotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Booking::created(function ($booking) {
            $message = "New booking created:\n";
            $message .= "User ID: {$booking->user_id}\n";
            $message .= "Room: {$booking->room->type_room} (#{$booking->room->room_number})\n";
            $message .= "Price: {$booking->price}\n\n";

            File::append(storage_path('logs/bookings.log'), $message);
        });
    }
}