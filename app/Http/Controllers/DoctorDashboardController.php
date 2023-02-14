<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use App\Models\Bed;
use App\Models\AdmissionNew;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index(){

        // $totalPatients      = Patient::count();

        $totalPatients  = Patient::count();
        $totalDoctors   = User::where('usertype', 'doctor')->where('status', 'active')->count();
        $totalNurses    = User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->count();
        $totalVacantBeds = Bed::where('status', 'vacant')->count();

        return view('doctorHome', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds'));

    }
}



