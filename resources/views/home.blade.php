@extends('layouts.adminlayout')

@section('content')
<!-- Main Content -->

<div class="container">
    <div class="d-flex justify-content-center">
        <!-- <h1>Admin</h1> -->
        @if(auth()->user()->is_doctor == 1)
            <a href="{{url('doctor/routes')}}">Doctor</a>
        @else
            <div class=”panel-heading”>Admin User</div>
        @endif

    </div>
</div>

@endsection