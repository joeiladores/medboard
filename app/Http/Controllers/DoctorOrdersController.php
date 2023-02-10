<?php

namespace App\Http\Controllers;
use App\Models\AdmissionNew;
use App\Models\DoctorOrder;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorOrdersController extends Controller
{
    public function index()
    {
        //Get and Display Patient name where status is Admitted
        $admittedPatient = DB::table('admission_news')
        ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
        ->where('status', 'Admitted')
        ->select('admission_news.id as admission_id', 'patients.firstname', 'patients.lastname', 'admission_news.primary_doctor_id')
        ->get();


        //Get and Display Patient name inside table
        $patient_name = DB::table('doctor_orders')
        ->join('admission_news', 'doctor_orders.admission_id', '=', 'admission_news.id')
        ->join('patients', 'admission_news.patient_id', '=', 'patients.id')
        ->select('doctor_orders.id as doctor_orders_id', 'patients.firstname' ,'patients.lastname')
        ->get();
       
        //Get and Display room type inside table
        $room_num = DB::table('doctor_orders')
        ->join('admission_news', 'doctor_orders.admission_id', '=', 'admission_news.id')
        ->join('beds', 'admission_news.bed_id', '=', 'beds.id')
        ->select('doctor_orders.id as doctor_orders_id', 'beds.room')
        ->get();

        //Get and Display All Admitted Patient List
        $doctor_orders = DoctorOrder::orderBy('created_at', 'desc')->get();
        

        return view('doctorsOrders', ['admittedPatient'=>$admittedPatient ,'patient_name' => $patient_name,'room_num'=>$room_num, 'doctor_orders' => $doctor_orders]);

    }

    public function store(Request $request)
    {
        $selected = explode(',', $request->input('patientsList'));
        $admission_id = $selected[0];
        $primary_doctor_id = $selected[1];
    
        $doctor_order = new DoctorOrder;
    
        $doctor_order->admission_id      =  $admission_id;
        $doctor_order->doctor_id         =  $primary_doctor_id;
        $doctor_order->save();
    
        return redirect()->route('orders', ['id' => $doctor_order]);
    }

    // public function show($id)
    // {
    //     $doctor_order = DoctorOrder::find($id);
    //     $admission = AdmissionNew::where('admission_id', $doctor_order->admission_id)->first();
    //     $patient = Patient::where('patient_id', $admission->patient_id)->first();
    
    //     return view('orders.show', ['doctor_order' => $doctor_order, 'admission' => $admission, 'patient' => $patient]);
    // }

    


    


}
    