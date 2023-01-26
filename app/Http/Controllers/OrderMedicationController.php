<?php

namespace App\Http\Controllers;

use App\Models\OrderMedication;
use Illuminate\Http\Request;



class OrderMedicationController extends Controller
{
    public function index()
    {                //blade        //table name      //model
        return view('orders')->with('order_medications', OrderMedication::all());
    }
  
    
    public function show($id)
    {
        $orders_medications = OrderMedication::find($id);

        return view('show')->with('order_medications', $orders_medications);
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

    
}
