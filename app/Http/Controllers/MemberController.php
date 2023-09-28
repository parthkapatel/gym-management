<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isFalse;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view("members.index",compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("members.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "string",
            "age" => "integer|min:1|digits_between:1,100",
            "address" => "string",
            "email" => "string|email",
            "contact" => "integer",
        ]);

        $member = Member::create([
           "name" => $request->input("name"),
           "age" => $request->input("age"),
           "address" => $request->input("address"),
           "email" => $request->input("email"),
           "contact" => $request->input("contact"),
        ]);
        if($member){
            return redirect()->route("members.index")->with('message', 'Member created successfully');
        }
        return redirect()->route("members.index")->with('error', 'Something wrong to create member');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view("members.edit",compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "string",
            "age" => "integer|min:1|digits_between:1,100",
            "address" => "string",
            "email" => "string|email",
            "contact" => "integer",
        ]);

        $member = Member::where("id",$id)->update([
            "name" => $request->input("name"),
            "age" => $request->input("age"),
            "address" => $request->input("address"),
            "email" => $request->input("email"),
            "contact" => $request->input("contact"),
        ]);
        if($member){
            return redirect()->route("members.index")->with('message', 'Member updated successfully');
        }
        return redirect()->route("members.index")->with('error', 'Something wrong to update member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Member::find($id)->delete();
        return redirect()->route("members.index")->with('message', 'Member deleted successfully');
    }
}
