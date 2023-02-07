<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index() {
        return view('admin/departments')->with('departments', Department::all());
    }

    public function store(Request $request)
    {
        $department = new Department;
        $department->name = $request->name;        
        $department->save();

        return redirect()->route('departments')->with('success', 'New department added successfully!');
    }

    // For modal display Department for Edit
    protected function show($id) {
        $department = Department::find($id);
        return response()->json($department);
    }

    public function update(Request $request) {
        $department  = Department::find($request->id);
        $department->name = $request->name;
        $department->save();

        return redirect()->route('departments')->with('success', 'Department is successfully updated!');

    }

    protected function delete($id) {
        $department = Department::find($id);
        $department->delete();

        return redirect()->route('departments')->with('success', 'Department is successfully deleted!');
    }
}
