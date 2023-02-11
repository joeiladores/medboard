<?php

namespace App\Http\Controllers;
use App\Models\OrderTransfusion;
use App\Models\OrderMedication;
use Illuminate\Http\Request;

class OrderTransfusionController extends Controller
{
    public function edit($id)
    {
        $orders_transfusions = OrderTransfusion::find($id);
        $doctor_order_id = $orders_transfusions->doctor_order_id;
    return view('editTransfusion', ['id' => $doctor_order_id])->with('order_transfusion', $orders_transfusions);
    }

    public function store(Request $request)
    {  
        $orders_transfusion = new OrderTransfusion;

        $doctor_order_id                        = $request->input('doctor_order_id');
        $orders_transfusion->doctor_order_id    = $doctor_order_id;
        
        $orders_transfusion->type               = $request->type;
        $orders_transfusion->fluid_name         = $request->fluid_name;
        $orders_transfusion->instruction        = $request->instruction;
      
        $orders_transfusion->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

    public function update(Request $request)
    {
        $orders_transfusion = OrderTransfusion::find($request->id);

        $doctor_order_id                    = $orders_transfusion->doctor_order_id;
        $orders_transfusion->type           = $request->type;
        $orders_transfusion->fluid_name     = $request->fluid_name;
        $orders_transfusion->instruction    = $request->instruction;
      
        $orders_transfusion->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

    public function destroy($id)
    {
        $orders_transfusion = OrderTransfusion::find($id);
        $doctor_order_id = $orders_transfusion->doctor_order_id;
        $orders_transfusion->delete();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

}
