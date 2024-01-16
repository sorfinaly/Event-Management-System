<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\freeparticipant;

class freeparticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $freeparticipants = DB::table('freeparticipants')
        ->orderBy('matric_id', 'asc')
        ->get();

        return view('/freeparticipantslist', ['freeparticipants'=>$freeparticipants]);
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
        $freeparticipant= new Freeparticipant();
        $freeparticipant->matric_id=$request->matric_id;
        $freeparticipant->full_name=$request->full_name;
        $freeparticipant->email=$request->email;
        $freeparticipant->kuliyyah=$request->kuliyyah;
        $freeparticipant->phone_no=$request->phone_no;
        $freeparticipant->created_at=today();
        $freeparticipant->updated_at=today();
        $freeparticipant->save();
        return redirect('freeparticipantslist');
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
