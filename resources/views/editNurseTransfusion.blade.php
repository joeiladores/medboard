@extends('layouts.NurseLayout')

@section('content')
<h3>Edit Transfusion</h3>
<a href="{{ route('nurseDoctorOrdersView', $order_transfusion->doctor_order_id) }}" style="background-color:#1f66d1;" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="{{ route('updateNurseTransfusion') }}">
                @csrf
                <div class="col-5 p-2 d-inline-block">
                <div class="form-group">
                <label for="type" class="form-label">Type:</label>
                    <select style="pointer-events: none;" class="form-select" id="type" name="type"required>
                        <option value="IV">IV</option>
                        <option value="Blood">Blood</option>
                    </select>
                    </div>
                    <script>
                    var select = document.getElementById("type");
                    var options = select.options;
                    for (var i = 0; i < options.length; i++) {
                        if (options[i].value == "{{ $order_transfusion->type }}") {
                        options[i].selected = true;
                        break;
                        }
                    }
                    </script>
                </div>
                <div class="col-6 p-2 d-inline-block">
                    <label for="fluid_name" class="form-label">Fluid:</label>
                    <input style="pointer-events: none;" type="text" class="form-control" id="fluid_name" name="fluid_name" value="{{ $order_transfusion->fluid_name }}" required>
                </div>
                <div class="col-12 p-2">
                    <label for="instruction" class="form-label">Instructions:</label>

                    <textarea style="pointer-events: none;" type="text" class="form-control" id="instruction" name="instruction" rows="3" required>{{ $order_transfusion->instruction }}</textarea>
                    
                </div>
                <div class="col-3 p-2 mb-3 d-inline-block">
                    <label for="date_started">Date Start:</label>
                    <input style="pointer-events: none;" class="form-control" type="date" id="date_started" name="date_started" value="{{ $order_transfusion->date_started }}"/>
                </div>

                <div class="col-3 p-2 me-5 mb-3 d-inline-block">
                        <label for="date_stopped">Date Done:</label>
                        <input class="form-control" type="date" id="date_stopped" name="date_stopped" value="{{ $order_transfusion->date_stopped }}" />
                        <input type="hidden" name="id" value="{{ $order_transfusion->id }}">
                </div><br>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:#1f66d1;">Edit Transfusion</button>
            </form>
        </div>
        @endsection