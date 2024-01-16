<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\committeeController;

class committeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committee = DB::table('committeelist')
        ->orderBy('matric_id', 'asc')
        ->get();

        return view('/committeelist', ['committee'=>$commitee]);
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
        $committee= new Committee();
        $committee->matric_id=$request->matric_id;
        $committee->full_name=$request->full_name;
        $committee->email=$request->email;
        $committeet->kuliyyah=$request->kuliyyah;
        $committee->phone_no=$request->phone_no;
        $committee->created_at=today();
        $committee->updated_at=today();
        $committee->save();
        return redirect('committeelist');
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
