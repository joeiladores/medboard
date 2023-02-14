@extends('layouts.NurseLayout')

@section('content')
<h3>Edit Medication</h3>
<a href="{{ route('nurseDoctorOrdersView', $order_medication->doctor_order_id) }}" style="background-color:#1f66d1;" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-1 m-4 ps-3">
      <form method="POST" action="{{ route('updateNurseMedication') }}">
                @csrf
                <div class="col-7 p-2">
                    <label for="medication" class="form-label">Medication</label>
                    <input style="pointer-events: none;" type="text" class="form-control" id="medication" name="medication" value="{{ $order_medication->medication }}" required>
                </div>
                <div class="col-2 p-2 d-inline-block">
                    <label for="dose" class="form-label">Dosage</label>
                    <input style="pointer-events: none;" type="text" class="form-control" id="dose" name="dose" value="{{ $order_medication->dose }}" required>
                </div>
                <div class="col-2 p-2 d-inline-block">
                <div class="form-group mb-3">
                <label for="unit">Unit:</label>
                <select style="pointer-events: none;" class="form-select" id="unit" name="unit" required>
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
                <div class="col-2 ps-3 d-inline-block">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input style="pointer-events: none;" type="number" class="form-control" id="quantity" name="quantity" value="{{ $order_medication->quantity }}" required>
                </div>
                <div class="col-3 p-2 d-inline-block">
                    <label for="frequency" class="form-label">Frequency</label>
                    <input style="pointer-events: none;" type="text" class="form-control" id="frequency" name="frequency" value="{{ $order_medication->frequency }}"required>
                </div>
                <div class="col-10 p-2">
                    <label for="instructions" class="form-label">Instructions</label>
                    <textarea style="pointer-events: none;" type="text" class="form-control" id="instructions" name="instructions" rows="3" required>{{ $order_medication->instructions }}</textarea>
                    
                </div>
                <div class="col-3 p-2 mb-3 d-inline-block">
                    <label for="date_started">Date Start:</label>
                    <input class="form-control" type="date" id="date_started" name="date_started" value="{{ $order_medication->date_started }}" />
                </div>

                <div class="col-3 p-2 me-5 mb-3 d-inline-block">
                        <label for="date_stopped">Date Done:</label>
                        <input class="form-control" type="date" id="date_stopped" name="date_stopped" value="{{ $order_medication->date_stopped }}" />
                        <input type="hidden" name="id" value="{{ $order_medication->id }}">
                </div>
                <br>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:#1f66d1;;">Edit Medication</button>
            </form>
        </div>
        @endsection