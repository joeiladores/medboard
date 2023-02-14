@extends('layouts.doctorLayout', ['title' => 'Doctor-Dashboard'])
@section('content')
<!-- Doctor Dashboard -->
<div class="container-fluid px-4 mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="row card-bg border shadow rounded-5 second-text mt-3 py-4 ps-4">
                <div class="col-6 col-lg-4 col-sm-12">
                    <h2>Welcome! <br> Dr. {{ Auth::user()->firstname . " " . Auth::user()->lastname }}</h2>
                    <p>Have a nice day!</p>
                    <br>
                    <br>
                    <div>Date: <span>{{ \Carbon\Carbon::now(new DateTimeZone('Asia/Singapore'))->format('D, F j, Y') }}</span></div>
                </div>
                <div class="col-6 col-lg-8 pb-3">
                    <marquee behavior="" direction=""><img class="doc-icon" src="{{asset('/images/doctor-icon.png')}}" alt=""></marquee>
                </div>
            </div>
        </div>

        <div class="row mt-4 ms-1">
            <div class="col-md-3 mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-3 fw-bold second-text">{{ $totalPatients }}</h3>
                    <p class="text-primary fs-4">Total Current Patients</p>

                    <i class="fa-solid fa-clipboard-list fs-1 primary-text"></i>
                </div>
            </div>

            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-3 fw-bold second-text">{{ $totalDoctors }}</h3>
                    <p class="text-primary fs-4">Total Doctors Active</p>

                    <i class="fa-solid fa-user-doctor fs-1 primary-text"></i>
                </div>
            </div>
            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-3 fw-bold second-text">---</h3>
                    <p class="text-primary fs-4">Total Orders</p>

                    <i class="fa-solid fa-clipboard-list fs-1 primary-text"></i>
                </div>
            </div>

            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-3 fw-bold second-text">{{ $totalNurses }}</h3>
                    <p class="text-primary fs-4">Total Current Nurses</p>

                    <i class="fa-solid fa-user-nurse fs-1 primary-text"></i>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="table table-hover">



            </div>
        </div>
    </div>
</div>

@endsection