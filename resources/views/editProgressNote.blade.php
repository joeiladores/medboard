@extends('layouts.NurseLayout')

@section('content')
<h3>Edit Progress Note</h3>
<a href="{{ route('orders', $progress_note->doctor_order_id) }}" style="background-color:rgb(66,100,208);" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="{{ route('updateProgressNote') }}">
                @csrf
            <div class="mb-3">
            <textarea class="form-control" id="progress_notes" name="progress_notes" rows="3" required>{{ $progress_note->notes }}</textarea>
            <input type="hidden" name="id" value="{{ $progress_note->id }}">
            </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:rgb(66,100,208);">Edit Progress Note</button>
            </form>
        </div>
        @endsection