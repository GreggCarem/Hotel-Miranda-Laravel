<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class Activities extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Auth::user()->activities;
        return view('activities.show',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id; 
        $this->validateRequest($request);
        $newactivity = Activity::create($request->all());
        return response()->json($newactivity,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activities = Activity::where('id',$id)
                    ->where('user_id',Auth::user()->id)
                    ->first();
        return view('activities.show',compact('activities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::where('id',$id)
                    ->where('user_id',Auth::user()->id)
                    ->first();
        return view('activities.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());
        return response()->json($activity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return response()->json(null,204);
    }

    private function validateRequest(Request $request){
        $request->validate([
            'type' => 'required|string',
            //'user_id' => 'required|integer',
            'datetime' => 'required|date',
            //'paid' => 'boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer'
        ]);
    }
}
