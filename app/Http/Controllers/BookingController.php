<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
   
    public function index()
    {
        $bookings = Booking::all();
        
        
        return view('bookings.index', compact('bookings'));
    }

    
    public function create()
    {
        return view('bookings.create');
    }

    
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

     
        Booking::create($validatedData);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

   
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

  
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }


    public function update(Request $request, Booking $booking)
    {
 
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

     
        $booking->update($validatedData);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

   
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}