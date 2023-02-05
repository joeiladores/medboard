<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('HomeAdmin')->with('medical_histories', MedicalHistory::get());
        // from login direct to admin dashboard
    }

    public function patient()
    {
        return view('CreatePatient')->with('allPatients', Patients::orderByDesc('created_at')->get());
    }

    public function store(Request $request)
    {

        $patient = new Patients;

        $patient->lastname          = $request->lastname;
        $patient->firstname         = $request->firstname;
        $patient->midname           = $request->midname;
        $patient->marital_status    = $request->marital_status;
        $patient->birth_date        = $request->birth_date;
        $patient->gender            = $request->gender;
        $patient->blood_type        = $request->blood_type;
        $patient->address           = $request->address;
        $patient->phone             = $request->phone;
        $patient->health_insurance  = $request->health_insurance;
        $patient->relative_fullname = $request->relative_fullname;
        $patient->relation          = $request->relation;
        $patient->relative_phone    = $request->relative_phone;

        $patient->save();
        return redirect()->route('patientView')->with('success', 'New patient added!');
    }

    public function update(Request $request)
    {

        $patient = Patients::find($request->id);

        $patient->lastname          = $request->lastname;
        $patient->firstname         = $request->firstname;
        $patient->midname           = $request->midname;
        $patient->marital_status    = $request->marital_status;
        $patient->birth_date        = $request->birth_date;
        $patient->gender            = $request->gender;
        $patient->blood_type        = $request->blood_type;
        $patient->address           = $request->address;
        $patient->phone             = $request->phone;
        $patient->health_insurance  = $request->health_insurance;
        $patient->relative_fullname = $request->relative_fullname;
        $patient->relation          = $request->relation;
        $patient->relative_phone    = $request->relative_phone;

        $patient->save();
        return redirect()->route('patientView')->with('success', 'Patient updated successfully!');
    }

    public function edit($id)
    {
        $patient = Patients::find($id);

        return view('CreatePatient')->with('edit_patient', $patient);
    }

    public function destroy($id)
    {
        $patient = Patients::find($id);
        $patient->delete();

        return redirect()->route('patientView')->with('success', 'Patient deleted successfully!');
    }

    // for edit modal to show database detail per patient
    public function showPatient($id)
    {
        $patient = Patients::find($id);
        return response()->json($patient);
    }

    // for show modal patient med history
    public function showMedHistory($id)
    {
        $medhistory = MedicalHistory::find($id);
        return response()->json($medhistory);
    }
}
