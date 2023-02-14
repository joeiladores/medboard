
<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNew;
use App\Models\Patient;
use App\Models\User;
use App\Models\Bed;
use App\Models\DoctorOrder;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionNewController extends Controller
{
    
    // for edit modal to show database detail per admission (js fetch url)
    protected function show($id) {
        $admission = AdmissionNew::find($id);
        return response()->json($admission);
    }

    public function showAdmitted()
    {
       $admissions = AdmissionNew::

        leftJoin('patients', 'patients.id', '=', 'admission_news.patient_id')
        ->leftJoin('users as users1', 'users1.id', '=', 'admission_news.admitting_doctor_id')
        ->leftJoin('users as users2', 'users2.id', '=', 'admission_news.primary_doctor_id')
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

            'users1.lastname AS ad_lastname',
            'users1.firstname AS ad_firstname',
            'users1.middlename AS ad_middlename',

            'users2.lastname AS pd_lastname',
            'users2.firstname AS pd_firstname',
            'users2.middlename AS pd_middlename'
        
        ]);


        return view('admittedPatients')
            ->with('admittedinfo', $admissions)
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
        return redirect()->route('admittedPatient')->with('success', 'New admitted patient added!');
    }
    

    public function update(Request $request)
    {
        $admissionNew = AdmissionNew::find($request->id);
        // dd($request);
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
        return redirect()->route('admittedPatient')->with('success', 'New admitted patient added!');
    }
   

    public function destroy($id)
    {
        $admissionNew = AdmissionNew::find($id);
        $admissionNew->delete();

        return redirect()->route('admittedPatient')->with('success', 'Patient deleted successfully!');
    }

    // Will receive admission id/Patient id
    public function kardex($id) {
        
        // $patient = Patient::where('id', 1)->first();
        // $admissions = $patient->admission;
            // ->with('beds');

        // $kardexinfo = AdmissionNew::find(1)->with('patients');

        $kardexinfo = AdmissionNew::

        leftJoin('patients', 'patients.id', '=', 'admission_news.patient_id')
        ->where('admission_news.id', '=', $id)
        ->leftJoin('users as users1', 'users1.id', '=', 'admission_news.admitting_doctor_id')
        ->leftJoin('users as users2', 'users2.id', '=', 'admission_news.primary_doctor_id')
        ->leftJoin('beds', 'beds.id', '=', 'admission_news.bed_id')
        

        ->get([

            'admission_news.id',
            'admission_news.bed_id',
            'admission_news.admitting_doctor_id',
            'admission_news.type',
            'admission_news.status',
            'admission_news.created_at',
            'admission_news.*',

            'patients.lastname AS p_lastname',
            'patients.firstname AS p_firstname',
            'patients.midname AS p_midname',
            'patients.*',

            // 'beds.room',
            'beds.*',

            'users1.lastname AS ad_lastname',
            'users1.firstname AS ad_firstname',
            'users1.middlename AS ad_middlename',

            'users2.lastname AS pd_lastname',
            'users2.firstname AS pd_firstname',
            'users2.middlename AS pd_middlename'
        
        ]);
        
        // return response()->json($kardexinfo);
        
        // dd($kardexinfo->admission_id);  
                
        // dd($admissions);             
        // dd($patient->admissions);
        
        if(auth()->user()->usertype == 'admin') {
            $layout = 'layouts.adminlayout';
            $title = 'Admin-Kardex';            
        }
        elseif(auth()->user()->usertype == 'doctor') {
            $layout = 'layouts.doctorLayout';
            $title = 'Doctor-Kardex';
        }
        else {
            $layout = 'layouts.NurseLayout';
            $title = 'Nurse-Kardex';
        }

        return view('kardex', compact('layout', 'title'))
        ->with('kardexinfo', $kardexinfo);
        
    }
}
