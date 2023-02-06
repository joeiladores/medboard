<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboard extends Controller
{
    public function index(){
        return view('doctorHome');
    }
}
