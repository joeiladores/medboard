<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    
    public function storeMedHistory(Request $request)
    {

        $medicalhistory = new MedicalHistory;

        $medicalhistory->patient_id    = $request->patient_id;
        $medicalhistory->date          = $request->date;
        $medicalhistory->conditions    = $request->conditions;
        $medicalhistory->symptoms      = $request->symptoms;
        $medicalhistory->medications   = $request->medications;
        $medicalhistory->allergies     = $request->allergies;
        $medicalhistory->bad_habit     = $request->bad_habit;

        $medicalhistory->save();
        return redirect()->route('patientView')->with('success', 'Patient medical history added!');
    }
}
