@extends('layouts.orders')

@section('content')
<h3>Edit Medication</h3>
<a href="{{ route('orders') }}" style="background-color:rgb(66,100,208);" class="btn btn-light btn-sm text-light">← Go back</a>
<div class="card p-5 m-4">
      <form method="POST" action="{{ route('updateTransfusion') }}">
                @csrf
                <div class="col-5 p-2 d-inline-block">
                <div class="form-group">
                <label for="type" class="form-label">Type:</label>
                    <select class="form-select" id="type" name="type" value="{{ $order_transfusion->type }}" value>
                        <option selected>Choose...</option>
                        <option value="IV">IV</option>
                        <option value="Blood">Blood</option>
                    </select>
                    </div>
                    <script>
                      var select = document.getElementById("type");
                    var selectedValue = select.options[select.selectedIndex].value;
                    console.log(selectedValue);
                    </script>
                </div>
                <div class="col-6 p-2 d-inline-block">
                    <label for="fluid_name" class="form-label">Fluid:</label>
                    <input type="text" class="form-control" id="fluid_name" name="fluid_name" value="{{ $order_transfusion->fluid_name }}" required>
                </div>
                <div class="col-12 p-2">
                    <label for="instruction" class="form-label">Instructions:</label>
                    <input type="text" class="form-control" id="instruction" name="instruction" value="{{ $order_transfusion->instruction }}" required>
                    <input type="hidden" name="id" value="{{ $order_transfusion->id }}">
                </div>
                <button type="submit" class="btn btn-light text-light m-2" style="background-color:rgb(66,100,208);">Edit Transfusion</button>
            </form>
        </div>
        @endsection