<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\feeparticipant;

class feeparticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feeparticipants = DB::table('feeparticipants')
        ->orderBy('matric_id', 'asc')
        ->get();

        return view('/feeparticipantslist', ['feeparticipants'=>$feeparticipants]);
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
        $feeparticipant= new Feeparticipant();
        $feeparticipant->matric_id=$request->matric_id;
        $feeparticipant->full_name=$request->full_name;
        $feeparticipant->email=$request->email;
        $feeparticipant->kuliyyah=$request->kuliyyah;
        $feeparticipant->phone_no=$request->phone_no;
        $feeparticipant->payment_proof=$request->payment_proof;
        $feeparticipant->created_at=today();
        $feeparticipant->updated_at=today();
        $feeparticipant->save();
        return redirect('feeparticipantslist');
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
