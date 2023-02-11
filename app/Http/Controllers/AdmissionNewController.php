<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNew;
use App\Models\Patient;
use App\Models\User;
use App\Models\Bed;
use Illuminate\Http\Request;

class AdmissionNewController extends Controller
{

    public function showAdmitted()
    {
        $admission = Patient::with('admission')->get();
        // dd($admission);


        return view('admittedPatients')
            ->with('admission', $admission)
            ->with('allAdmitted', AdmissionNew::orderByDesc('created_at')->get())
            ->with('allPatients', Patient::orderByDesc('created_at')->get())
            ->with('doctors', User::where('usertype', 'doctor')->where('status', 'active')->get())
            ->with('beds', Bed::where('status', 'vacant')->get());
    }


    public function storeAdmit(Request $request)
    {
        $admissionNew = new AdmissionNew;
        // dd($request);
        $admissionNew->bed_id               =   $request->bed_id;
        $admissionNew->patient_id           =   $request->patient_id;
        $admissionNew->admitting_doctor_id  =   $request->admitting_doctor_id;

        $admissionNew->type                 =   $request->type;
        $admissionNew->complain             =   $request->complain;
        $admissionNew->impression_diagnosis =   $request->impression_diagnosis;
        $admissionNew->age                  =   $request->age;
        $admissionNew->weight               =   $request->weight;
        $admissionNew->mental_status        =   $request->mental_status;
        $admissionNew->activities           =   $request->activities;
        $admissionNew->diet                 =   $request->diet;
        $admissionNew->tubes                =   $request->tubes;
        $admissionNew->special_info         =   $request->special_info;
        $admissionNew->status               =   $request->status;

        $admissionNew->save();
        return redirect()->route('admittedPatient')->with('success', 'New admitted patient added!');
    }
}
