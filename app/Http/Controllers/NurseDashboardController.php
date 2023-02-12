<?php

namespace App\Http\Controllers;

use App\Models\DoctorOrder;
use App\Models\NurseAssignment;
use App\Models\OrderMedication;
use App\Models\OrderTransfusion;
use App\Models\OrderTreatment;
use App\Models\ProgressNote;
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

        if ($assigned_station) {
          $patientsInStation = DB::table('doctor_orders')
            ->join('admission_news', 'doctor_orders.admission_id', '=', 'admission_news.id')
            ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
            ->join('beds', 'admission_news.bed_id', '=', 'beds.id')
            ->where([
                ['admission_news.status', 'Admitted'],
                ['beds.station', $assigned_station->station]
            ])
            ->select(
                'doctor_orders.id',
                'doctor_orders.doctor_id as doctor_id',
                'patients.firstname', 
                'patients.lastname',
                'beds.room as room',
                'doctor_orders.created_at'
            )
            ->get();
          return view('nurseHome', ['patientsInStation' => $patientsInStation, 'name' => $name, 'user' => $user, 'specialization' => $specialization, 'assigned_station' => $assigned_station]);
        } else {
            $patientsInStation = DB::table('doctor_orders')
            ->join('admission_news', 'doctor_orders.admission_id', '=', 'admission_news.id')
            ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
            ->join('beds', 'admission_news.bed_id', '=', 'beds.id')
            ->where([
                ['admission_news.status', 'Admitted']
            ])
            ->select(
                'doctor_orders.id',
                'doctor_orders.doctor_id as doctor_id',
                'patients.firstname', 
                'patients.lastname',
                'beds.room as room',
                'doctor_orders.created_at'
            )
            ->get();
          return view('nurseHome', ['name' => $name, 'user' => $user, 'specialization' => $specialization]);
        }
        

       
    
}
    public function patients(){
        return view('nursePatients');
    }

    public function nurseOrderView($id){
            $doctor_order = DoctorOrder::findOrFail ($id);
            $order_medications = OrderMedication::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
            $order_transfusions = OrderTransfusion::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
            $order_treatments = OrderTreatment::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
            $progress_notes = ProgressNote::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
        
            $doctor_order = DoctorOrder::first();
    $doctor_order = DoctorOrder::find(request()->route('id'));

    $admittedPatient = DB::table('admission_news')
        ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
        ->where('admission_news.id', $doctor_order->admission_id)
        ->select('admission_news.id as admission_id', 'patients.firstname', 'patients.lastname')
        ->first();

    $roomNumber = DB::table('admission_news')
        ->join('beds', 'admission_news.patient_id', '=', 'beds.id')
        ->where('admission_news.id', $doctor_order->admission_id)
        ->select('admission_news.id as admission_id', 'beds.room')
        ->first();

            return view('nurseDoctorOrdersView', compact('doctor_order', 'order_medications','order_transfusions','order_treatments','progress_notes','doctor_order','admittedPatient','roomNumber'));
    }
    
}


