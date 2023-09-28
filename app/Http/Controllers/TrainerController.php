<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view("trainers.index",compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("trainers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "string",
            "address" => "string",
            "email" => "string|email",
            "contact" => "integer",
        ]);

        $trainer = Trainer::create([
            "name" => $request->input("name"),
            "address" => $request->input("address"),
            "email" => $request->input("email"),
            "contact" => $request->input("contact"),
        ]);
        if($trainer){
            return redirect()->route("trainers.index")->with('message', 'Trainer created successfully');
        }
        return redirect()->route("trainers.index")->with('error', 'Something wrong to create trainer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trainer = Trainer::find($id);
        return view("trainers.edit",compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "string",
            "address" => "string",
            "email" => "string|email",
            "contact" => "integer",
        ]);

        $trainer = Trainer::where("id",$id)->update([
            "name" => $request->input("name"),
            "address" => $request->input("address"),
            "email" => $request->input("email"),
            "contact" => $request->input("contact"),
        ]);
        if($trainer){
            return redirect()->route("trainers.index")->with('message', 'Trainer updated successfully');
        }
        return redirect()->route("trainers.index")->with('error', 'Something wrong to update trainer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Trainer::find($id)->delete();
        return redirect()->route("trainers.index")->with('message', 'Trainer deleted successfully');
    }
}
