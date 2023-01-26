<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function patient()
    {
        return view('patient')->with('patients', Patients::all());
    }
}
