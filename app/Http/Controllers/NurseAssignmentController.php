<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NurseAssignment;
use App\Models\User;

class NurseAssignmentController extends Controller
{
    public function nurseAssignments() {
        return view('admin/nurseassignments')
            ->with('nurseassignments', NurseAssignment::all()->sortDesc())
            ->with('nurses', User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->get());
    }

    public function storeNurseAssignment(Request $request)
    {
        $nurseassignment = new NurseAssignment;

        $nurseassignment->user_id = $request->nurse_id;
        $nurseassignment->datetime_start = $request->datetime_start;
        $nurseassignment->datetime_end = $request->datetime_end;
        $nurseassignment->shift = $request->shift;
        $nurseassignment->station = $request->station;
       
        $nurseassignment->save();

        return redirect()->route('nurseassignments')->with('success', 'New nurse assignment added successfully!');
    }

    public function deleteNurseAssignment($id) {
        $nurseassignment = NurseAssignment::find($id);
        $nurseassignment->delete();

        return redirect()->route('nurseassignments')->with('success', 'Nurse Assignment is successfully deleted!');
    }
}
