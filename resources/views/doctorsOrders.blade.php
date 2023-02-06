@extends('layouts.orders')

@section('content')
<div class="card">
<div class="row">
    <div class="col-12">
    <div id="DoctorOrder" class="tabcontent">
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
  </div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- For DataTables -->
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

<!-- For Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- For Font Awesome -->
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">

<!-- For Data Table -->
<script>
 var dataTable = new DataTable("#doctorOrderTable");
</script>

@endsection
