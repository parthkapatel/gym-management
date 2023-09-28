<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Trainer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function main(){
        if (Auth::user()){
            $totalMembers = Member::all()->count();
            $totalTrainers = Trainer::all()->count();
            return view("includes.main",compact('totalTrainers','totalMembers'));
        }
        return view("includes.login");
    }
}
