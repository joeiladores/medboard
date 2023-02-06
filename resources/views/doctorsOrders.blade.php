@extends('layouts.orders')

@section('content')
<div class="card">
<div class="row">
    <div class="col-12 p-5">
<table class="table" id="doctorOrderTable">
            <thead>
                <tr>
                    <th>Admission id Test</th>
                    <th>Doctor id Test</th>
                    <th>Patient Name</th>
                    <th>Room Number</th>
                    <th>Assigned Nurse</th>
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
                    <td>{{ $doctor_order->nurse_id }}</td>
                    <td> {{ date_format(new DateTime($doctor_order->date_ordered), "F j, Y") }}</td>
                   
                    <td class="d-flex">
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

<!-- For Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- For Font Awesome -->
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">


@endsection
