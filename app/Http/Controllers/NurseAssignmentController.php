<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NurseAssignment;
use App\Models\User;

class NurseAssignmentController extends Controller
{
    public function nurseAssignments() {

        $nurseassignments = NurseAssignment::with('user')->get();

        return view('admin/nurseassignments')
        ->with('nurseassignments', $nurseassignments)
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

        return redirect()->route('nurseassignments')->with('success', 'Nurse assignment was updated!');
    }
    
    public function showNurseAssignment($id) {
        $nurseassignment = NurseAssignment::with('user')->find($id);
        // $nurseassignment = NurseAssignment::find($id);
        return response()->json($nurseassignment);
    }

    public function updateNurseAssignment(Request $request) {        
        $nurseassignment = NurseAssignment::find($request->id);
        
        $nurseassignment->user_id  = $request->userid;
        $nurseassignment->room = $request->room;        
        $nurseassignment->room_type = $request->room_type;
        $nurseassignment->station = $request->station;
        $nurseassignment->status = $request->status;

        $nurseassignment->save();
        return redirect()->route('beds')->with('success', 'Bed is successfully updated!');
    }   

    public function deleteNurseAssignment($id) {
        $nurseassignment = NurseAssignment::find($id);
        $nurseassignment->delete();

        return redirect()->route('nurseassignments')                
                ->with('success', 'Nurse Assignment is successfully deleted!');
    }
}
