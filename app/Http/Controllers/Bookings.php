<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Contracts\PaymentProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon; 

class Bookings extends Controller
{
    protected $paymentProvider;

    public function __construct(PaymentProvider $paymentProvider)
    {
        $this->paymentProvider = $paymentProvider;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'price' => 'required|numeric|min:0',
            'checkin' => 'required|date', 
            'checkout' => 'required|date|after:checkin', 
        ]);
    
        $amount = $validated['price'];
    
        // Check if the room is  booked 
        $isBooked = Booking::where('room_id', $validated['room_id'])
            ->where(function ($query) use ($validated) {
                $query->whereBetween('checkin', [$validated['checkin'], $validated['checkout']])
                      ->orWhereBetween('checkout', [$validated['checkin'], $validated['checkout']])
                      ->orWhere(function ($query) use ($validated) {
                          $query->where('checkin', '<=', $validated['checkin'])
                                ->where('checkout', '>=', $validated['checkout']);
                      });
            })
            ->exists();
    
        if ($isBooked) {
            return redirect()->back()->with('message', 'This room is already booked for the selected dates.')->with('alert-class', 'alert-warning');
        }
    
 
        if ($this->paymentProvider->charge($amount)) {
            // Create  booking if payment successful
            $booking = Booking::create([
                'user_id' => Auth::id(),
                'room_id' => $validated['room_id'],
                'price' => $amount,
                'checkin' => $validated['checkin'],
                'checkout' => $validated['checkout'],
            ]);
    
          
            \Log::info("Booking created for user ID: {$booking->user_id}, room ID: {$booking->room_id}");
            $this->storeBookingAsJson($booking);
    
            return redirect()->back()->with('message', 'Booking created successfully!')->with('alert-class', 'alert-success');
        }
    
        return redirect()->back()->with('message', 'Payment failed. Please try again.')->with('alert-class', 'alert-danger');
    }

    protected function storeBookingAsJson($booking)
{
    $bookingData = [
        'user_id' => $booking->user_id,
        'room_id' => $booking->room_id,
        'price' => $booking->price,
        'checkin' => (string) $booking->checkin,
        'checkout' => (string) $booking->checkout,
        'created_at' => (string) $booking->created_at,
    ];

   
    $existingBookings = json_decode(Storage::get('bookings.json'), true) ?? [];
    $existingBookings[] = $bookingData;

  
    Storage::put('bookings.json', json_encode($existingBookings, JSON_PRETTY_PRINT));
}
}