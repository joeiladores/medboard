<?php

namespace App\Http\Controllers;

use App\Models\admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $admission = new admission();
        $admission->date_time_admitted = $request->date_time_admitted;
        $admission->complain = $request->complain;
        $admission->impression_diagnosis = $request->impression_diagnosis;
        $admission->age = $request->age;
        $admission->weight = $request->weight;
        $admission->activities = $request->activities;
        $admission->diet = $request->diet;
        $admission->tubes = $request->tubes;
        $admission->special_info = $request->special_info;
        $admission->date_time_discharge = $request->date_time_discharge;
        $admission->status = $request->status;
        $admission->save();
        return redirect()->route('admission.index')->with('success', 'Admission record has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(admission $admission)
    {
        return view('admissions.show', compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(admission $admission)
    {
        return view('admissions.edit', compact('admission'));
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(admission $admission)
    {
        //
    }
}
