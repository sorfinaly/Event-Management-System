<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import your Event model

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the search query from the request
        $query = $request->input('query');

        // Perform your search logic here
        $results = $this->performSearch($query);

        // Pass the results to the view
        return view('search-results', ['query' => $query, 'results' => $results]);
    }

    private function performSearch($query)
    {
        // Replace this with your actual search logic
        // For example, searching events with a name similar to the query
        $results = Event::where('event_name', 'like', "%$query%")->get();

        return $results;
    }
}
