@extends('layouts.NurseLayout')

@section('content')
<div class="card m-3">
<div class="row">
    <div class="col-12 p-4">
<table class="table" id="doctorOrderTable"><button id="addbtn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctorOrderModal" style="float:right; background-color:rgb(66,100,208);">
+ New Order
</button>
    <h2>Doctor's Orders</h2>

        <thead>
            <tr>
                <th>Admission id Test</th>
                <th>Doctor id Test</th>
                <th>Patient Name</th>
                <th>Room Number</th>
                <th>Date Ordered</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctor_orders as $doctor_order)
                <tr>
                    <td>{{ $doctor_order->admission_id }}</td>
                    <td>{{ $doctor_order->doctor_id }}</td>
                    <td>Sample Patient Name</td>
                    <td>Sample Room Number</td>
                    <td> {{ date_format(new DateTime($doctor_order->date_ordered), "F j, Y") }}</td>
                    <td>
                    <a href="{{ route('orders', $doctor_order->id) }}" class="btn btn-sm text-light fa-sharp fa-solid fa-clipboard" style="background-color:rgb(66,100,208);"></a>
                </td>
                </tr>
                @endforeach
            </tbody>
           </table>
    </div>
  </div>
  </div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
 <!-- For DataTables -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>
 <script>
   $(document).ready( function () {
     $('#doctorOrderTable').DataTable({
         "pageLength": 20,
         "lengthChange": false
     });
 } );  
 </script>

 
<!-- Medication Modal-->
<div class="modal fade" id="doctorOrderModal" tabindex="-1" aria-labelledby="doctorOrderModalLabel" aria-hidden="true">
  <<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(66,100,208);">
        <h5 class="modal-title text-light" id="doctorOrderModal" >Add Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
      <form class="patientsList-form" method="POST" action="{{ route('doctorsOrders')}}">
  @csrf
  <input type="hidden" name="doctor_order_id" value="{{ $doctor_order->id }}">
  <div class="col-12 pt-2 d-inline-block">
    <div class="form-group p-2">
      <label for="patientsList" class="form-label">Patient List:</label>
      <select class="form-select" id="patientsList" name="patientsList" required>
        <option value="">Choose...</option>
        <option value="Gram">Gram</option>
        <option value="Milligram">Milligram</option>
        <option value="Microgram">Microgram</option>
      </select>
    </div>
  </div>
  <div>
    <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);float:right" onclick="validatePatientListForm()">Add</button>
    <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal" style="float:right">Close</button>
  </div>
</form>
    <script>
    function validatePatientListForm() {
        var form = document.querySelector('.patientsList-form');
        var patientsList = form.querySelector('#patientsList').value;

        if (patientsList === "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            confirmButtonColor: 'rgb(66,100,208)',
            text: 'Please select a patient before submitting!'
        });
        } else {
        Swal.fire({
            title: 'Success!',
            text: 'New Order has been added!',
            icon: 'success',
            showConfirmButton: false,
        });
        }
    }
    </script>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- For Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- For Font Awesome -->
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">


@endsection
