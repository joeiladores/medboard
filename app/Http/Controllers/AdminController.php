<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bed;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->status == 'active') {

            $totalPatients  = Patient::count();
            $totalDoctors   = User::where('usertype', 'doctor')->where('status', 'active')->count();
            $totalNurses    = User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->count();
            $totalVacantBeds = Bed::where('status', 'vacant')->count();

            return view('homeAdmin', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds'));
        } else {
            throw new UnauthorizedHttpException('Inactive');

            try {
                $totalPatients  = Patient::count();
                $totalDoctors   = User::where('usertype', 'doctor')->where('status', 'active')->count();
                $totalNurses    = User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->count();
                $totalVacantBeds = Bed::where('status', 'vacant')->count();

                return view('homeAdmin', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds'));
            } 
            catch (UnauthorizedHttpException $e) {
                return response()->view('errors.inactive', [], 'inactive');
            }
        }
    }


}
