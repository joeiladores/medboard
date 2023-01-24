@extends('layouts.orders')

@section('content')
<div class="container p-5 m-5">
        <h1 class="fw-bold">Patient List</h1>
        <p>This tables displays all our patients.</p>
        @if (session('success'))
            <div class="alert alert-success my-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table mt-3">
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Room</th>
                <th>Doctor's Orders</th>
            </tr>
            @if(count($patients)>0)
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->room }}</td>
                    <td>{{ $patient->order }}</td>
                    <td>
                        <a class="btn btn-sm btn-light" href="{{ route('edit', $patient->id) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center p-5 m-5">
                There are currently no patients.
                </td>
            </tr>
            @endif
@endsection
