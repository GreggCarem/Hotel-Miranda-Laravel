<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    
    public function create()
    {
        return view('rooms.create');
    }

    
    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'roomNumber' => 'required|string|max:255|unique:rooms',
            'bedType' => 'required|string',
            'facilities' => 'required|string',
            'rate' => 'required|numeric',
            'offerPrice' => 'nullable|numeric',
            'status' => 'required|string',
            'description' => 'required|string',
        ]);

        Room::create($validatedData); 
        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'roomNumber' => 'required|string|max:255|unique:rooms,roomNumber,' . $room->id,
            'bedType' => 'required|string',
            'facilities' => 'required|string',
            'rate' => 'required|numeric',
            'offerPrice' => 'nullable|numeric',
            'status' => 'required|string',
            'description' => 'required|string',
        ]);

        $room->update($validatedData); 
        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}