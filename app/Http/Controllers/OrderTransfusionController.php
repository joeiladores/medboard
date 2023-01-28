<?php

namespace App\Http\Controllers;
use App\Models\OrderTransfusion;
use App\Models\OrderMedication;
use Illuminate\Http\Request;

class OrderTransfusionController extends Controller
{
    // public function index()
    // {
    //     $order_transfusions = OrderTransfusion::orderBy('created_at', 'desc')->get();
    //         $order_medications = OrderMedication::orderBy('created_at', 'desc')->get();

    //         return view('orders',compact('order_transfusions','order_medications'));

    // }


    public function edit($id)
    {
        $orders_transfusions = OrderTransfusion::find($id);

        return view('editTransfusion')->with('order_transfusion', $orders_transfusions);
    }

    public function store(Request $request)
    {  
        $orders_transfusion = new OrderTransfusion;

        $orders_transfusion->type           = $request->type;
        $orders_transfusion->fluid_name     = $request->fluid_name;
        $orders_transfusion->instruction    = $request->instruction;
      
        $orders_transfusion->save();

        return redirect()->route('orders')->with('success', 'New Transfusion added successfully!');
    }

    public function update(Request $request)
    {
        $orders_transfusion = OrderTransfusion::find($request->id);

        $orders_transfusion->type           = $request->type;
        $orders_transfusion->fluid_name     = $request->fluid_name;
        $orders_transfusion->instruction    = $request->instruction;
      
        $orders_transfusion->save();

        return redirect()->route('orders')->with('success', 'Transfusion updated successfully!');
    }

    public function destroy($id)
    {
        $orders_transfusion = OrderTransfusion::find($id);
        $orders_transfusion->delete();

        return redirect()->route('orders')->with('success', 'Transfusion deleted successfully!');
    }

}
