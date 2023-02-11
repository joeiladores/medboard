<?php

namespace App\Http\Controllers;

use App\Models\DoctorOrder;
use App\Models\NurseAssignment;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NurseDashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();
        $name = $user->firstname . " " . $user->lastname;

        // Get the authenticated user's specialization
        $specialization = Specialization::where('id', $user->specialization_id)->first();

        // Get the authenticated user's assigned station
        $assigned_station = NurseAssignment::where('user_id', $user->id)->first();
        
    $patientsInStation = DB::table('doctor_orders')
        ->join('admission_news', 'doctor_orders.admission_id', '=', 'admission_news.id')
        ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
        ->join('beds', 'admission_news.bed_id', '=', 'beds.id')
        ->where([
            ['admission_news.status', 'Admitted'],
            ['beds.station', $assigned_station->station]
        ])
        ->select(
            'doctor_orders.doctor_id as doctor_id', 
            'patients.firstname', 
            'patients.lastname',
            'beds.room as room',
            'doctor_orders.created_at'
        )
        ->get();

        return view('nurseHome', ['patientsInStation' => $patientsInStation,'name' => $name, 'user' => $user, 'specialization' => $specialization, 'assigned_station' => $assigned_station]);
    
    
}


    


    public function patients(){
        return view('nursePatients');
    }
}


