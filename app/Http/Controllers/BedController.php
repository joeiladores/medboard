<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function beds() {
        return view('admin/beds')->with('beds', Bed::all());
    }

    public function storeBed(Request $request)
    {
        $bed = new Bed;

        $bed->bednum = $request->bednum;
        $bed->room = $request->room;
        $bed->room_type = $request->room_type;
        $bed->station = $request->station;
        $bed->status = $request->status;
        
        $bed->save();

        return redirect()->route('beds')->with('success', 'New bed added successfully!');
    }

    public function editBed($id) {
        $bed = Bed::find($id);

        return view('editbed')->with('bed', $bed);
    }

    public function updateBed(Request $request) {        
        $bed = Bed::find($request->id);
        
        $bed->bednum  = $request->bednum;
        $bed->room = $request->room;        
        $bed->room_type = $request->room_type;
        $bed->station = $request->station;
        $bed->status = $request->status;        

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

}
