@extends('layouts.orders')

@section('content')
<h3>Edit Transfusion</h3>
<a href="{{ route('orders') }}" style="background-color:rgb(66,100,208);" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="{{ route('updateTreatment') }}">
                @csrf
                <div class="col-6 p-2 d-inline-block">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $order_treatment->name }}" required>
                </div>
                <div class="col-5 p-2 d-inline-block">
                    <label for="type" class="form-label">Treatment Type:</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $order_treatment->type }}" required>
                </div>
                <div class="col-12 p-2 d-inline-block">
                    <label for="instruction" class="form-label">Instructions:</label>
                    <input type="text" class="form-control" id="instruction" name="instruction" value="{{ $order_treatment->instruction }}" required>
                </div>

                <div class="col-5 p-2 mb-3 d-inline-block">
                        <label for="date_started">Date Start:</label>
                        <input class="form-control" type="date" id="date_started" name="date_started" value="{{ $order_treatment->date_started }}" required/>
                </div>

                <div class="col-5 p-2 me-5 mb-3 d-inline-block">
                        <label for="date_done">Date Done:</label>
                        <input class="form-control" type="date" id="date_done" name="date_done" value="{{ $order_treatment->date_done }}" required/>
                        <input type="hidden" name="id" value="{{ $order_treatment->id }}">
                </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:rgb(66,100,208);">Edit Transfusion</button>
            </form>
        </div>
        @endsection