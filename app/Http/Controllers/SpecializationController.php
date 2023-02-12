<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    public function index() {
        return view('admin/specialization')->with('specializations', Specialization::all());
    }

    public function store(Request $request)
    {
        $specialization = new Specialization;

        
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'unique:specializations'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('specialization')
                ->with('error', 'Specialization already exists!');
        }

        $specialization->usertype = $request->usertype;        
        $specialization->name = $request->name;        
        $specialization->save();

        return redirect()->route('specialization')->with('success', 'New specialization added successfully!');
    }

    // For modal display Department for Edit
    protected function show($id) {
        $specialization = Specialization::find($id);
        return response()->json($specialization);
    }

    public function update(Request $request) {
        $specialization  = Specialization::find($request->id);
        $specialization->usertype = $request->usertype;  
        $specialization->name = $request->name;
        $specialization->save();

        return redirect()->route('specialization')->with('success', 'Specialization is successfully updated!');

    }

    protected function delete($id) {
        $specialization = Specialization::find($id);
        $specialization->delete();

        return redirect()->route('specialization')->with('success', 'Specialization is successfully deleted!');
    }
}
