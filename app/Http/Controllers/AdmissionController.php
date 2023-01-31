<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admissionModel;
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
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id = "'.$row->id.'" data-original-title="Edit" class="edit btn-primary btn-sm
                editAdmission">Edit</a> ';

                $btn.= '<a href="javascript:void(0)" data-toggle="tooltip" data-id = "'.$row->id.'" data-original-title="Delete" class="delete btn-danger btn-sm
                deleteAdmission">Delete</a> ';

                return $btn;
            })

            ->rawColumns(['actions'])
            ->make(true);
            return  $allDAta;

        }
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
        //
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
