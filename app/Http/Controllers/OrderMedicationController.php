<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\DoctorOrder;
use App\Models\OrderTransfusion;
use App\Models\OrderMedication;
use App\Models\OrderTreatment;
use App\Models\ProgressNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class OrderMedicationController extends Controller
{
    public function index($id){
    $doctor_order = DoctorOrder::findOrFail ($id);
    $order_medications = OrderMedication::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
    $order_transfusions = OrderTransfusion::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
    $order_treatments = OrderTreatment::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'desc')->get();
    $progress_notes = ProgressNote::where('doctor_order_id', $doctor_order->id)->orderBy('created_at', 'asc')->get();
    

    ////
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

    return view('orders', compact('doctor_order', 'order_medications','order_transfusions','order_treatments','progress_notes','doctor_order','admittedPatient','roomNumber'));
}

public function edit($id)
{
    $orders_medications = OrderMedication::findOrFail($id);
    $doctor_order_id = $orders_medications->doctor_order_id;

    return view('editMedication', ['id' => $doctor_order_id])->with('order_medication', $orders_medications);
}

    public function store(Request $request)
    {
        $orders_medication = new OrderMedication;

        $doctor_order_id                    = $request->input('doctor_order_id');
        $orders_medication->doctor_order_id = $doctor_order_id;
        
        $orders_medication->medication      = $request->medication;
        $orders_medication->dose            = $request->dose;
        $orders_medication->quantity        = $request->quantity;
        $orders_medication->unit            = $request->unit;
        $orders_medication->frequency       = $request->frequency;
        $orders_medication->instructions    = $request->instructions;

        $orders_medication->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);

    }

    public function update(Request $request)
    {
        $orders_medication = OrderMedication::find($request->id);

        $doctor_order_id = $orders_medication->doctor_order_id;

        $orders_medication->medication       = $request->medication;
        $orders_medication->dose             = $request->dose;
        $orders_medication->quantity         = $request->quantity;
        $orders_medication->unit             = $request->unit;
        $orders_medication->frequency        = $request->frequency;
        $orders_medication->instructions     = $request->instructions;

        $orders_medication->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

        public function destroy($id)
    {
        $orders_medication = OrderMedication::findOrFail ($id);
        $doctor_order_id = $orders_medication->doctor_order_id;
        $orders_medication->delete();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }
    
}
