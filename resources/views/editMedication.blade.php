@extends('layouts.orders')

@section('content')
<h3>Edit Medication</h3>
<a href="{{ route('orders', $order_medication->doctor_order_id) }}" style="background-color:rgb(66,100,208);" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="{{ route('updateMedication') }}">
                @csrf
                <div class="col-12 p-2">
                    <label for="medication" class="form-label">Medication</label>
                    <input type="text" class="form-control" id="medication" name="medication" value="{{ $order_medication->medication }}" required>
                </div>
                <div class="col-4 p-2 d-inline-block">
                    <label for="dose" class="form-label">Dosage</label>
                    <input type="text" class="form-control" id="dose" name="dose" value="{{ $order_medication->dose }}" required>
                </div>
                <div class="col-4 p-2 d-inline-block">
                <div class="form-group mb-3">
                <label for="unit">Unit:</label>
                <select class="form-select" id="unit" name="unit" required>
                    <option value="Gram">Gram</option>
                    <option value="Milligram">Milligram</option>
                    <option value="Microgram">Microgram</option>
                </select>
                </div>
                <script>
                var select = document.getElementById("unit");
                var options = select.options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].value == "{{ $order_medication->unit }}") {
                    options[i].selected = true;
                    break;
                    }
                }
                </script>
                </div>
                <div class="col-3 ps-3 d-inline-block">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order_medication->quantity }}" required>
                </div>
                <div class="col-9 p-2">
                    <label for="frequency" class="form-label">Frequency</label>
                    <input type="text" class="form-control" id="frequency" name="frequency" value="{{ $order_medication->frequency }}"required>
                </div>
                <div class="col-9 p-2">
                    <label for="instructions" class="form-label">Instructions</label>
                    <textarea type="text" class="form-control" id="instructions" name="instructions" rows="3" required>{{ $order_medication->instructions }}</textarea>
                    <input type="hidden" name="id" value="{{ $order_medication->id }}">
                </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:rgb(66,100,208);">Edit Medication</button>
            </form>
        </div>
        @endsection