@extends('layouts.adminlayout')

@section('content')
<!-- Main Content -->

<div class="container">
    <div class="d-flex justify-content-center">
        <!-- <h1>Admin</h1> -->
        @if(auth()->user()->usertype == 'admin')
            <div class=”panel-heading”>Admin User</div>
        @else(auth()->user()->usertype == 'doctor')            
            <a href="{{url('doctor/routes')}}">Doctor</a>
        @endif

    </div>
</div>

@endsection