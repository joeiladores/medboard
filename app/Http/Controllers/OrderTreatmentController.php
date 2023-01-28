<?php

namespace App\Http\Controllers;

use App\Models\OrderTreatment;
use Illuminate\Http\Request;

class OrderTreatmentController extends Controller
{
   
    public function edit($id)
    {
        $orders_treatment = OrderTreatment::find($id);

        return view('editTreatment')->with('order_treatment', $orders_treatment);
    }

    public function store(Request $request)
    {
        $orders_treatment = new OrderTreatment;

        $orders_treatment->name         = $request->name;
        $orders_treatment->type         = $request->type;
        $orders_treatment->instruction  = $request->instruction;
        $orders_treatment->date_started = $request->date_started;
        $orders_treatment->date_done    = $request->date_done;

        $orders_treatment->save();

        return redirect()->route('orders')->with('success', 'New Medication added successfully!');
    }
    public function update(Request $request)
    {
        $orders_treatment = OrderTreatment::find($request->id);

        
        $orders_treatment->name         = $request->name;
        $orders_treatment->type         = $request->type;
        $orders_treatment->instruction  = $request->instruction;
        $orders_treatment->date_started = $request->date_started;
        $orders_treatment->date_done    = $request->date_done;

        $orders_treatment->save();

        return redirect()->route('orders')->with('success', 'Treatment updated successfully!');
    }

    public function destroy($id)
    {
        $orders_treatment = OrderTreatment::find($id);
        $orders_treatment->delete();

        return redirect()->route('orders')->with('success', 'Treatment deleted successfully!');
    }

}
