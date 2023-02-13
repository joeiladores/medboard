<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        // TODO: TO CHANGE THIS LATER TO GET PATIENTS FROM ADMISSION TABLE WHERE STUATUS IS ADMITTED        
        $totalPatients  = Patient::count();
        $totalDoctors   = User::where('usertype', 'doctor')->where('status', 'active')->count();
        $totalNurses    = User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->count();
        $totalVacantBeds = Bed::where('status', 'vacant')->count();

        return view('homeAdmin', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds'));

        // from login direct to admin dashboard
    }

    public function patient()
    {
        return view('CreatePatient')->with('allPatients', Patient::orderByDesc('created_at')->get())
            ->with('medhistory', MedicalHistory::get())
            ->with('doctors', User::where('usertype', 'doctor')->where('status', 'active')->get())
            ->with('beds', Bed::where('status', 'vacant')->get());
    }

    public function store(Request $request)
    {

        $patient = new Patient;

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

        $patient = Patient::find($request->id);

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
        $patient = Patient::find($id);

        return view('CreatePatient')->with('edit_patient', $patient);
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect()->route('patientView')->with('success', 'Patient deleted successfully!');
    }

    // for edit modal to show database detail per patient
    // for show/display med history of a specific patient
    public function showPatient($id)
    {
        $patient = Patient::find($id);
        return response()->json($patient);
    }
}
