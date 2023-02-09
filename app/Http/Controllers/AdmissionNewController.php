<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNew;
use Illuminate\Http\Request;

class AdmissionNewController extends Controller
{
    public function storeAdmit(Request $request)
    {
        $admissionNew = new AdmissionNew;

        $admissionNew->bed_id               =   $request->bed_id;
        $admissionNew->patient_id           =   $request->patient_id;
        $admissionNew->admitting_doctor_id  =   $request->admitting_doctor_id;
        $admissionNew->primary_doctor_id    =   $request->primary_doctor_id;
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
        return redirect()->route('patientView')->with('success', 'Patient admitted successfully!');

    }
}
