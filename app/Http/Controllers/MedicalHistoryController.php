<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Illuminate\Http\Request;
use App\Models\Patient;

class MedicalHistoryController extends Controller
{
    
    // public function index()
    // {
    //     return view('showMH')->with('medhistory', MedicalHistory::get());
    // }

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


    public function showMedHistory($id)
    {

       
        $medhistoryinfos = Patient::with('medhistory')->find($id);
        return view('showMH')->with('medhistoryinfos', $medhistoryinfos);

            
    }

    // return response()->json(Patient::with('medhistory')->find($id));
        // this returns the whole data of two tables

    // return response()->json(Patients::find($id)->medhistory);
        // this returns the entire medhistory table only

    

}
