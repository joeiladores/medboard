<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Bed;


class BedController extends Controller
{
    public function beds() {
        return view('admin/beds')->with('beds', Bed::all());
    }

    public function storeBed(Request $request)
    {
        $bed = new Bed;

        $validator = Validator::make($request->all(), [
            'bednum' => ['required', 'string', 'unique:beds'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('beds')
                ->with('error', 'Bed number already exists!');
        }

        $bed->bednum = $request->bednum;
        $bed->room = $request->room;
        $bed->room_type = $request->room_type;
        $bed->station = $request->station;
        
        $bed->save();

        return redirect()->route('beds')->with('success', 'New bed added successfully!');
    }

    // public function editBed($id) {
    //     $bed = Bed::find($id);

    //     return view('editbed')->with('bed', $bed);
    // }

    public function updateBed(Request $request) {        
        $bed = Bed::find($request->id);
        $originalbednum = $bed->bednum;
        
        $bed->bednum  = $request->bednum;
        $bed->room = $request->room;        
        $bed->room_type = $request->room_type;
        $bed->station = $request->station;
        $bed->status = $request->status;
        
        // IF new email is already existing in the database
        if($bed->bednum != $originalbednum) {
            $bedexist = Bed::where('bednum', $bed->bednum)->first();
            if($bedexist != NULL) {
                return redirect()->route('beds')
                ->with('error', 'Bed number already exists!');
            }
        }

        $bed->save();
        return redirect()->route('beds')->with('success', 'Bed is successfully updated!');
    }        

    public function deleteBed($id) {
        $bed = Bed::find($id);
        $bed->delete();

        return redirect()->route('beds')->with('success', 'Bed is successfully deleted!');
    }

    // For modal display Bed Information for Edit
    public function showBed($id) {
        $bed = Bed::find($id);
        return response()->json($bed);
    }

    // public function countVacant() {
    //     return Bed::all()->count();
    // }

}
