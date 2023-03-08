<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Bed;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;

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

            $admissions = AdmissionNew::select(DB::raw('COUNT(*) as count'), DB::raw("DATE_FORMAT(created_at, '%b%Y') as month_name"))
                ->whereBetween('created_at', [Carbon::now()->subMonth(12), Carbon::now()])
                ->groupBy('month_name')
                ->orderBy(DB::raw("YEAR(created_at)"))
                ->orderBy(DB::raw("MONTH(created_at)"))
                ->get();

            $chartData = [
                'months' => $admissions->pluck('month_name'),
                'count' => $admissions->pluck('count')
            ];

            // dd($chartData);

            return view('homeAdmin', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds', 'chartData'));
        } else {
            throw new UnauthorizedHttpException('Inactive');

            try {
                $totalPatients  = Patient::count();
                $totalDoctors   = User::where('usertype', 'doctor')->where('status', 'active')->count();
                $totalNurses    = User::where('usertype', 'nurse')->orWhere('usertype', 'chiefnurse')->where('status', 'active')->count();
                $totalVacantBeds = Bed::where('status', 'vacant')->count();

                return view('homeAdmin', compact('totalPatients', 'totalDoctors', 'totalNurses', 'totalVacantBeds'));
            } catch (UnauthorizedHttpException $e) {
                return response()->view('errors.inactive', [], 'inactive');
            }
        }
    }
}
