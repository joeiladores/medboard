<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function bed() {
        return view('bed')->with('beds', Bed::all());
    }
}
