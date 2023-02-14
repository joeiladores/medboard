@extends('layouts.doctorLayout', ['title' => 'Doctor-Dashboard'])
@section('content')
<!-- Doctor Dashboard -->
<div class="container-fluid px-4 mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="row card-bg border shadow rounded-5 second-text mt-3 py-4 ps-4">
                <div class="col-6 col-lg-4 col-sm-12 ps-4">
                    <h2>Welcome!</h2>
                    <p class="fs-1 fw-bold">Dr. {{ Auth::user()->firstname . " " . Auth::user()->lastname }}</p> 
                    <p class="fs-4">Have a nice day!</p>
                    <br>
                    <div class="fs-4">Date: <span class="fs-4">{{ \Carbon\Carbon::now(new DateTimeZone('Asia/Singapore'))->format('D, F j, Y') }}</span></div>
                </div>
                <div class="col-6 col-lg-8 text-center">
                    <img class="doc-icon img-fluid" src="{{asset('/images/doctor-icon2.png')}}" alt="">
                    <img class="doc-icon img-fluid" src="{{asset('/images/doctor-icon3.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-4 ms-1">
            <div class="col-md-3 mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-2 fw-bold second-text">{{ $totalPatients }}</h3>
                    <p class="text-primary fs-4">Total Current Patients</p>

                    <i class="fa-solid fa-clipboard-list fs-1 primary-text"></i>
                </div>
            </div>

            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-2 fw-bold second-text">{{ $totalDoctors }}</h3>
                    <p class="text-primary fs-4">Active Doctors</p>

                    <i class="fa-solid fa-user-doctor fs-1 primary-text"></i>
                </div>
            </div>
            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-2 fw-bold second-text">{{ $totalDoctorOrders }}</h3>
                    <p class="text-primary fs-4">Total Doctor Orders</p>

                    <i class="fa-solid fa-clipboard-list fs-1 primary-text"></i>
                </div>
            </div>

            <div class="col-md-3  mt-2">
                <div class="card card-body card-bg text-center border shadow rounded-5">

                    <h3 class="fs-2 fw-bold second-text">{{ $totalNurses }}</h3>
                    <p class="text-primary fs-4">Active Nurses</p>

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