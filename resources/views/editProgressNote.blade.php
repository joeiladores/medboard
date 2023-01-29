@extends('layouts.orders')

@section('content')
<h3>Edit Transfusion</h3>
<a href="{{ route('orders') }}" style="background-color:rgb(66,100,208);" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="">
                @csrf
                <div class="mb-3">
                <textarea class="form-control" id="progress_notes" name="progress_notes" rows="3" required></textarea>
                <input type="hidden" name="id" value="{{ $order_treatment->id }}">
                </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:rgb(66,100,208);">Edit Transfusion</button>
            </form>
        </div>
        @endsection