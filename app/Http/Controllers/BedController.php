<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function beds() {
        return view('beds')->with('beds', Bed::all());
    }
}
