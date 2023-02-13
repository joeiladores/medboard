<?php

namespace App\Http\Controllers;

use App\Models\DoctorOrder;
use App\Models\NurseAssignment;
use App\Models\OrderMedication;
use App\Models\OrderTransfusion;
use App\Models\OrderTreatment;
use App\Models\ProgressNote;
use App\Models\Specialization;
use Carbon\Carbon;
use DateTimeZone;
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
            ->join('users', 'users.id', '=', 'doctor_orders.doctor_id')
            ->where([
                ['admission_news.status', 'Admitted'],
                ['beds.station', $assigned_station->station]
            ])
            ->select(
                'doctor_orders.id',
                'users.firstname as doctor_firstname', 
                'users.lastname as doctor_lastname',
                'patients.firstname', 
                'patients.lastname',
                'beds.room as room',
                'doctor_orders.created_at'
            )
            ->get();
          return view('nurseHome', ['patientsInStation' => $patientsInStation, 'name' => $name, 'user' => $user, 'specialization' => $specialization, 'assigned_station' => $assigned_station]);
        }
         else {
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

    public function patientList(){

        $user = Auth::user();
        $name = $user->firstname . " " . $user->lastname;

        // Get the authenticated user's specialization
        $specialization = Specialization::where('id', $user->specialization_id)->first();

        $patientAdmitted = DB::table('admission_news')
        ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
        ->join('beds', 'admission_news.bed_id', '=', 'beds.id')
        ->join('users', 'admission_news.primary_doctor_id', '=', 'users.id')
        ->where('admission_news.status', 'Admitted')
        ->select(
            'patients.id as patient_id',
            'patients.firstname as patient_firstname',
            'patients.lastname as patient_lastname',
            'users.firstname as doctor_firstname',
            'users.lastname as doctor_lastname',
            'admission_news.created_at as admission_date',
            'beds.room as room'
        )
        ->get();
    
    return view('nursePatients', [
        'patientAdmitted' => $patientAdmitted,
        'name' => $user->firstname . " " . $user->lastname,
        'user' => $user,
        'specialization' => $specialization
    ]);
}


public function editNurseMedication($id)
{
    $orders_medications = OrderMedication::findOrFail($id);
    $doctor_order_id = $orders_medications->doctor_order_id;

    return view('editNurseMedication', ['id' => $doctor_order_id])->with('order_medication', $orders_medications);
}

public function storeNurseProgressNote(Request $request)
    {
        $progresss_notes = new ProgressNote;
        $doctor_order_id                    = $request->input('doctor_order_id');
        $progresss_notes->doctor_order_id   = $doctor_order_id;


        $progresss_notes->notes     = $request->progress_notes;
        $progresss_notes->created_at      = Carbon::now(new DateTimeZone('Asia/Singapore'));
        
        $progresss_notes->save();

        return redirect()->route('nurseDoctorOrdersView', ['id' => $doctor_order_id]);
    }

    public function updateNurseMedication(Request $request)
    {
        $orders_medication = OrderMedication::find($request->id);

        $doctor_order_id = $orders_medication->doctor_order_id;

        $orders_medication->medication       = $request->medication;
        $orders_medication->dose             = $request->dose;
        $orders_medication->quantity         = $request->quantity;
        $orders_medication->unit             = $request->unit;
        $orders_medication->frequency        = $request->frequency;
        $orders_medication->instructions     = $request->instructions;

        $orders_medication->date_started     = $request->date_started;
        $orders_medication->date_stopped     = $request->date_stopped;



        $orders_medication->save();

        return redirect()->route('nurseDoctorOrdersView', ['id' => $doctor_order_id]);
    }


    //////Transfusion
    public function editNurseTransfusion($id)
    {
        $orders_transfusions = OrderTransfusion::find($id);
        $doctor_order_id = $orders_transfusions->doctor_order_id;
    return view('editNurseTransfusion', ['id' => $doctor_order_id])->with('order_transfusion', $orders_transfusions);
    }

    public function updateNurseTransfusion(Request $request)
    {
        $orders_transfusion = OrderTransfusion::find($request->id);

        $doctor_order_id                    = $orders_transfusion->doctor_order_id;
        $orders_transfusion->type           = $request->type;
        $orders_transfusion->fluid_name     = $request->fluid_name;
        $orders_transfusion->instruction    = $request->instruction;

        $orders_transfusion->date_started   =$request->date_started;
        $orders_transfusion->date_stopped   =$request->date_stopped;
      
        $orders_transfusion->save();

        return redirect()->route('nurseDoctorOrdersView', ['id' => $doctor_order_id]);
    }
}