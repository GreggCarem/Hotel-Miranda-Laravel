<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

      
        $results = \App\Models\Activity::where('name', 'like', '%' . $query . '%')->get();

        return view('search-results', compact('results'));
    }
}