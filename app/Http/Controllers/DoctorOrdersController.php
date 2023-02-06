<?php

namespace App\Http\Controllers;
use App\Models\DoctorOrder;
use Illuminate\Http\Request;

class DoctorOrdersController extends Controller
{
    public function index()
    {
        $doctor_orders = DoctorOrder::orderBy('created_at', 'desc')->get();
        
        return view('doctorsOrders',compact('doctor_orders'));
    }
}
    