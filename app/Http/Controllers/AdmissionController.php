<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admissionModel;
use Illuminate\Http\Response;
use DataTables;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admissions = admissionModel::all();
        
        if($request->ajax()){
            $allDAta = DataTables::of($admissions)
            ->addIndexColumn()
            ->addColumn('actions',function($row){
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id = "'.$row->id.'" data-original-title="Edit" class="edit btn-primary m-1 btn-lg editAdmission" style="margin: 0 10px;">Edit</a> ';

                $btn.= '<a href="javascript:void(0)" data-toggle="tooltip" data-id = "'.$row->id.'" data-original-title="Delete" class="delete btn-danger m-1 btn-lg deleteAdmission" style="margin: 0 10px;">Delete</a> ';

                return '<div style="display:flex;justify-content:center;">'.$btn.'</div>';
            })

 

            ->rawColumns(['actions'])
            ->make(true);
            return  $allDAta;

        }
        // return view('admission', compact($admissions));
        return view('admission', compact('admissions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'admitted' => 'required',
            'complain' => 'required',
            'impression_diagnosis' => 'required',
            'age' => 'required|numeric',
            'weight' => 'required|numeric',
            'activities' => 'required',
            'diet' => 'required',
            'tubes' => 'required',
            'special_info' => 'required',
            'status' => 'required',
            'date_time_discharge' => 'required|date',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
        ], [
            'admitted.required' => 'The admitted field is required',
            'complain.required' => 'The complain field is required',
            'impression_diagnosis.required' => 'The impression_diagnosis field is required',
            'age.required' => 'The age field is required',
            'age.numeric' => 'The age field must be a number',
            'weight.required' => 'The weight field is required',
            'weight.numeric' => 'The weight field must be a number',
            'activities.required' => 'The activities field is required',
            'diet.required' => 'The diet field is required',
            'tubes.required' => 'The tubes field is required',
            'special_info.required' => 'The special_info field is required',
            'status.required' => 'The status field is required',
            'date_time_discharge.required' => 'The date_time_discharge field is required',
            'date_time_discharge.date' => 'The date_time_discharge field must be a date',
            'created_at.required' => 'The created_at field is required',
            'created_at.date' => 'The created_at field must be a date',
            'updated_at.required' => 'The updated_at field is required',
            'updated_at.date' => 'The updated_at field must be a date',
        ]);

    
        // Store the validated data in the database
        // ...
    
        return response()->json(['success' => 'Admission added successfully.']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}