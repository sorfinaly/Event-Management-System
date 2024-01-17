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
        $event = new Event();
        $event->event_name = $request->input('event_name');
        $event->priced_event = $request->input('priced_event');
        $event->fee = $request->input('fee');
        $event->event_date = $request->input('event_date');
        $event->location = $request->input('location');
        $event->start_time = $request->input('start_time');
        $event->end_time = $request->input('end_time');
        $event->event_category = $request->input('event_category');
        $event->event_format = $request->input('event_format');
        $event->event_description = $request->input('event_description');
        if ($request->hasFile('event_img')) {
            $imagePath = $request->file('event_img')->store('event_images', 'public');
            $event->event_img = $imagePath;
        }
        $event->save();

        // Optionally, redirect the user after saving the event
        return redirect('/homepage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);

        return view('eventdetail', ['event' => $event]);
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
