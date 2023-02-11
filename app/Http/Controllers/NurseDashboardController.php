<?php

namespace App\Http\Controllers;

use App\Models\NurseAssignment;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseDashboardController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();
        $name = $user->firstname . " " . $user->lastname;
    
        // Get the authenticated user's specialization
        $specialization = Specialization::where('id', $user->specialization_id)->first();
    
        // Get the authenticated user's assigned station
        $assigned_station = NurseAssignment::where('user_id', $user->id)->first();
    
        return view('nurseHome', compact('name', 'user', 'specialization', 'assigned_station'));
    }
    


    public function patients(){
        return view('nursePatients');
    }
}


