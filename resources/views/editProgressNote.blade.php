@extends('layouts.doctorLayout', ['title' => 'Doctor Orders'])

@section('content')
<h3 class="ms-4">Edit Progress Note</h3>
<a href="{{ route('orders', $progress_note->doctor_order_id) }}" style="background-color:#1f66d1;" class="btn btn-light btn-sm text-light ms-4">← Go back</a>
<div class="card p-1 m-4 ps-3 mx-auto w-50">
      <form method="POST" action="{{ route('updateProgressNote') }}">
                @csrf
            <div class="p-3">
            <textarea class="form-control" id="progress_notes" name="progress_notes" rows="3" required>{{ $progress_note->notes }}</textarea>
            <input type="hidden" name="id" value="{{ $progress_note->id }}">
            </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:#1f66d1;">Edit Progress Note</button>
            </form>
        </div>
        @endsection