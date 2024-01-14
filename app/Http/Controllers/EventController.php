<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event; // Import the Student class from the appropriate namespace
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = DB::table('events')
            ->orderBy('id', 'asc')
            ->get();

        return view('homepage', ['events' => $events]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createevent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'priced_event' => 'required|in:free,paid',
            'fee' => 'nullable|numeric',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'event_category' => 'required|string|max:255',
            'event_format' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('event_img')) {
            $imagePath = $request->file('event_img')->store('event_images', 'public');
            $validatedData['event_img'] = $imagePath;
        }

        // Create a new event instance
        $event = new Event($validatedData);
        $event->event_name = $validatedData['event_name'];
        $event->priced_event = $validatedData['priced_event'];
        $event->fee = $validatedData['fee'];
        $event->event_date = $validatedData['event_date'];
        $event->location = $validatedData['location'];
        $event->start_time = $validatedData['start_time'];
        $event->end_time = $validatedData['end_time'];
        $event->event_category = $validatedData['event_category'];
        $event->event_format = $validatedData['event_format'];
        $event->event_description = $validatedData['event_description'];
         $event->event_img = $validatedData['event_img'];
        $event->save();

        // Optionally, redirect the user after saving the event
        return redirect('/homepage');


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
}
