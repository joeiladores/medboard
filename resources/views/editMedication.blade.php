@extends('layouts.orders')

@section('content')
<h3>Edit Medication</h3>
<div class="card">
      <form method="POST" action="{{ route('update') }}">
                @csrf
                <div class="col-9 p-2">
                    <label for="medication" class="form-label">Medication</label>
                    <input type="text" class="form-control" id="medication" name="medication" value="{{ $order_medication->medication }}" required>
                </div>
                <div class="col-9 p-2">
                    <label for="dose" class="form-label">Dosage</label>
                    <input type="text" class="form-control" id="dose" name="dose" value="{{ $order_medication->dose }}" required>
                </div>
                <div class="col-9 p-2">
                    <div class="form-group">
                      <label for="unit">Unit:</label>
                      <select id="unit" name="unit" class="form-control custom-select" value="{{ $order_medication->unit }}">
                        <option value="Gram">Gram</option>
                        <option value="Milligram">Milligram</option>
                        <option value="Microgram">Microgram</option>
                        <span class="icon-down"></span>
                      </select>
                    </div>

                    <script>
                      var select = document.getElementById("unit");
                    var selectedValue = select.options[select.selectedIndex].value;
                    console.log(selectedValue);
                    </script>
                </div>
                
                <div class="col-9 p-2">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order_medication->quantity }}" required>
                </div>
                <div class="col-9 p-2">
                    <label for="frequency" class="form-label">Frequency</label>
                    <input type="text" class="form-control" id="frequency" name="frequency" value="{{ $order_medication->frequency }}"required>
                </div>
                <div class="col-9 p-2">
                    <label for="instructions" class="form-label">Instructions</label>
                    <input type="text" class="form-control" id="instructions" name="instructions" value="{{ $order_medication->instructions }}"required>
                     <input type="hidden" name="id" value="{{ $order_medication->id }}">
                </div>
                <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);">Add</button>
            </form>
        </div>
        @endsection