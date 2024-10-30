<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class Rooms extends Controller
{
    public function indexoffers()
    {
        $rooms = Room::with(['photos','amenities'])->where('offer',1)->get();
        return view('app.offers',compact('rooms'));
    }

    public function availabilityrooms(Request $request)
    {
        $this->validateAvailability($request);
        $datestart = $request->input('inputDataIn');
        $dateend = $request->input('inputDataOut');

        $rooms = Room::whereDoesntHave('bookings', function ($query) use ($datestart, $dateend) {
            $query->where(function ($query) use ($datestart, $dateend) {
                $query->where('checkin', '<', $dateend)
                      ->where('checkout', '>', $datestart);
            });
        })->get();

        return view('app.room',compact('rooms'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with(['photos','amenities'])->get();
        return view('app.room',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function validateAvailability(Request $request){
        $request->validate([
            'inputDataIn' => 'required|date',
            'inputDataOut' => 'required|date|after:inputDataIn'
        ]);
    }
}
