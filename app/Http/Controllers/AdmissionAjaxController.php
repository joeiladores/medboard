<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use DataTables;

class AdmissionAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Admission::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn  btn-sm editAdmission"><i class="fa-duotone fa-pencil"></i></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn  btn-sm deleteAdmission"><i class="fa-duotone fa-trash"></i></a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('AdmissionAjax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Admission::updateOrCreate(['id' => $request->admission_id],
                [
                    'admitted' => $request->admitted,
                    'diagnosis' => $request->diagnosis, 
                    'age' => $request->age, 
                    'complain' => $request->complain, 
                    'weight' => $request->weight,
                    'activities' => $request->activities,
                    'diet' => $request->diet,
                    'tubes' => $request->tubes,
                    'specialinfo' => $request->specialinfo,
                    'status' => $request->status,
                    'discharge' => $request->discharge
                ]);


        return response()->json(['success'=>'Admission saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $Admission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admission = Admission::find($id);
        return response()->json($admission);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $Admission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admission::find($id)->delete();
     
        return response()->json(['success'=>'Admission deleted successfully.']);
    }
}

                //  'bed_id' => $request->bed_id,
                //  'patient_id' => $request->patient_id,
                //  'primary_doctor_id' => $request->primary_doctor_id,