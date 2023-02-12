
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
       $admissions = AdmissionNew::
          leftJoin('patients', 'patients.id', '=', 'admission_news.patient_id')
                ->where('admission_news.status', 'Admitted')

        ->leftJoin('users', 'users.id', '=', 'admission_news.admitting_doctor_id')
        ->leftJoin('beds', 'beds.id', '=', 'admission_news.bed_id')
        
        ->get([

            'admission_news.id',
            'admission_news.bed_id',
            'admission_news.admitting_doctor_id',
            'admission_news.type',
            'admission_news.status',
            'admission_news.created_at',

            'patients.lastname AS p_lastname',
            'patients.firstname AS p_firstname',
            'patients.midname AS p_midname',

            'beds.room',

            'users.lastname AS d_lastname',
            'users.firstname AS d_firstname',
            'users.middlename AS d_middlename'
        
        ]);


        return view('admittedPatients')->with('admittedinfo', $admissions);
    



        // $admission = Patient::with('admission')->get();
        // // dd($admission);
        // return view('admittedPatients')
        //     ->with('admission', $admission)
        //     ->with('allAdmitted', AdmissionNew::orderByDesc('created_at')->get())
        //     ->with('allPatients', Patient::orderByDesc('created_at')->get())
        //     ->with('doctors', User::where('usertype', 'doctor')->where('status', 'active')->get())
        //     ->with('beds', Bed::where('status', 'vacant')->get());
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
