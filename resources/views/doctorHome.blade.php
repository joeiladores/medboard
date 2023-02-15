@extends('layouts.doctorLayout', ['title' => 'Doctor-Dashboard'])
@section('content')
<!-- Doctor Dashboard -->
<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-8">
            <div class="row card-bg p-4 border shadow rounded-5 second-text d-flex justify-content-center">
                <div class="col-6">
                    <h3>Welcome Dr. Smith</h3>
                    <p>Have a nice day!</p>
                    <br>
                    <p>Date: Feb 14, 2023</p>
                </div>
                <div class="col-6">
                    <img class="doc-icon" src="{{asset('/images/doctor-icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-4">
    <div class="row g-3 my-2">

        <div class="col-md-6">
            <canvas id="patientChart"></canvas>
        </div>

        <div class="col-md-2">
            <div class="card card-body card-bg text-center border shadow rounded-5">

                <h3 class="fs-3 fw-bold second-text">15</h3>
                <p class="text-primary">Total Doctor's Order</p>

                <i class="fa-solid fa-clipboard-list fs-3 primary-text"></i>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card card-body card-bg text-center border shadow rounded-5">

                <h3 class="fs-3 fw-bold second-text">23</h3>
                <p class="text-primary">Your Total Patient</p>

                <i class="fa-solid fa-hospital-user fs-3 primary-text"></i>
            </div>
        </div>
    </div>
</div>

@endsection