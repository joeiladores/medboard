<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseDashboardController extends Controller
{
    public function index(){
        return view('nurseHome');
    }
}
