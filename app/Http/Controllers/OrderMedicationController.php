<?php

namespace App\Http\Controllers;

use App\Models\OrderMedication;
use Illuminate\Http\Request;



class OrderMedicationController extends Controller
{
    public function index()
    {
        return view('orders')->with('order_medications', OrderMedication::orderBy('created_at', 'desc')->get());
    }

  
    public function edit($id)
    {
        $orders_medications = OrderMedication::find($id);

        return view('editMedication')->with('order_medication', $orders_medications);
    }

    public function store(Request $request)
    {
        $orders_medication = new OrderMedication;

        $orders_medication->medication       = $request->medication;
        $orders_medication->dose             = $request->dose;
        $orders_medication->quantity         = $request->quantity;
        $orders_medication->unit             = $request->unit;
        $orders_medication->frequency        = $request->frequency;
        $orders_medication->instructions     = $request->instructions;

        $orders_medication->save();

        return redirect()->route('orders')->with('success', 'New Medication added successfully!');
    }
    public function update(Request $request)
    {
        $orders_medication = OrderMedication::find($request->id);

        $orders_medication->medication       = $request->medication;
        $orders_medication->dose             = $request->dose;
        $orders_medication->quantity         = $request->quantity;
        $orders_medication->unit             = $request->unit;
        $orders_medication->frequency        = $request->frequency;
        $orders_medication->instructions     = $request->instructions;

        $orders_medication->save();

        return redirect()->route('orders')->with('success', 'Medication updated successfully!');
    }

    public function destroy($id)
    {
        $orders_medication = OrderMedication::find($id);
        $orders_medication->delete();

        return redirect()->route('orders')->with('success', 'Medication deleted successfully!');
    }

    
}
