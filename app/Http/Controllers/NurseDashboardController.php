<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseDashboardController extends Controller
{
    public function index(){

        $user = Auth::user();
        $name = $user->firstname . " " . $user->lastname;

        return view('nurseHome', compact('name'));
    }


    public function patients(){
        return view('nursePatients');
    }
}


