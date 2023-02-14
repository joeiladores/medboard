<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\AdmissionNew;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index(){

        // $totalPatients      = Patient::count();
        // $totalPrimary       = AdmissionNew::where('primary_doctor_id')->count();
        // $totalAdmitting     = AdmissionNew::where('admitting_doctor_id')->count();

        return view('doctorHome');
    }
}



