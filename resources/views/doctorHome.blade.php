@extends('layouts.doctorLayout', ['title' => 'Doctor-Dashboard'])
@section('content')
<!-- Doctor Dashboard -->
<div class="container-fluid px-4 mt-3">
    <div class="row gy-3 gx-5">
        <div class="col-md-6">
            <div class="row card-bg p-4 border shadow rounded-5 second-text">
                <div class="col-6 col-lg-4 col-sm-12">
                    <h3>Welcome Dr. {{ Auth::user()->firstname . " " . Auth::user()->lastname }}</h3>
                    <p>Have a nice day!</p>
                    <br>
                    <div>Date: <span>{{ \Carbon\Carbon::now(new DateTimeZone('Asia/Singapore'))->format('D, F j, Y') }}</span></div>
                </div>
                <div class="col-6 col-lg-8 d-flex justify-content-end">
                    <img class="doc-icon" src="{{asset('/images/doctor-icon.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="card card-body card-bg text-center border shadow rounded-5">

                        <h3 class="fs-3 fw-bold second-text"></h3>
                        <p class="text-primary">Your Total Admit Patient</p>

                        <i class="fa-solid fa-clipboard-list fs-3 primary-text"></i>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body card-bg text-center border shadow rounded-5">

                        <h3 class="fs-3 fw-bold second-text"></h3>
                        <p class="text-primary">Your Total Primary Patient</p>

                        <i class="fa-solid fa-hospital-user fs-3 primary-text"></i>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card card-body card-bg text-center border shadow rounded-5">

                        <h3 class="fs-3 fw-bold second-text">15</h3>
                        <p class="text-primary">Total Doctor's Order</p>

                        <i class="fa-solid fa-clipboard-list fs-3 primary-text"></i>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card card-body card-bg text-center border shadow rounded-5">

                        <h3 class="fs-3 fw-bold second-text">23</h3>
                        <p class="text-primary">Your Total Patient</p>

                        <i class="fa-solid fa-hospital-user fs-3 primary-text"></i>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <div class="table table-hover">
                

            </div>
        </div>
    </div>
</div>

@endsection