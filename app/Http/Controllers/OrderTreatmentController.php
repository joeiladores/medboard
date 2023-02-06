<?php

namespace App\Http\Controllers;

use App\Models\OrderTreatment;
use Illuminate\Http\Request;

class OrderTreatmentController extends Controller
{
   
    public function edit($id)
    {
        $orders_treatments = OrderTreatment::findOrFail($id);
        $doctor_order_id = $orders_treatments->doctor_order_id;

        return view('editMedication', ['id' => $doctor_order_id])->with('order_treatment', $orders_treatments);
    }

    public function store(Request $request)
    {
        $orders_treatment = new OrderTreatment;

        $doctor_order_id                    = $request->input('doctor_order_id');
        $orders_treatment->doctor_order_id  = $doctor_order_id;

        $orders_treatment->name             = $request->name;
        $orders_treatment->type             = $request->type;
        $orders_treatment->instruction      = $request->instruction;
        $orders_treatment->date_started     = $request->date_started;
        $orders_treatment->date_done        = $request->date_done;

        $orders_treatment->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }
    public function update(Request $request)
    {
        $orders_treatment = OrderTreatment::find($request->id);

        $doctor_order_id = $orders_treatment->doctor_order_id;

        
        $orders_treatment->name         = $request->name;
        $orders_treatment->type         = $request->type;
        $orders_treatment->instruction  = $request->instruction;
        $orders_treatment->date_started = $request->date_started;
        $orders_treatment->date_done    = $request->date_done;

        $orders_treatment->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

    public function destroy($id)
    {
        $orders_treatment = OrderTreatment::findOrFail($id);
        $doctor_order_id = $orders_treatment->doctor_order_id;
        $orders_treatment->delete();

        return redirect()->route('orders', ['id' => $doctor_order_id]);

    }

}
