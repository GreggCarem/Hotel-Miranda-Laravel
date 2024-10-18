<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index(): View
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function create(): View
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|between:0,10',
        ]);

        if ($validator->fails()) {
            return redirect()->route('activities.create')
                ->withErrors($validator)
                ->withInput();
        }

        Activity::create($request->all());
        return redirect()->route('activities.index');
    }

    public function show(Activity $activity): View
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity): View
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'sometimes|required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'sometimes|required|exists:users,id',
            'datetime' => 'sometimes|required|date',
            'paid' => 'sometimes|boolean',
            'notes' => 'sometimes|nullable|string',
            'satisfaction' => 'sometimes|nullable|integer|between:0,10',
        ]);

        if ($validator->fails()) {
            return redirect()->route('activities.edit', $activity->id)
                ->withErrors($validator)
                ->withInput();
        }

        $activity->update($request->all());
        return redirect()->route('activities.index');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index');
    }
}