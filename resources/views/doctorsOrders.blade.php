@extends('layouts.DoctorLayout')

@section('content')
<title>Doctor's Orders</title>

<style>

#tableSize{
  color: rgb(14, 0, 0);
  height: 530px;
  border-radius: 50px 50px 25px 25px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
@media (max-width: 500px) {
  #tableSize{
  height: 1000px;
  }
}


</style>
<div>
<div class="row">
    <div class="col-12 ps-4 pe-4">
<div class="card rounded shadow p-3" id="tableSize">
<table class="table" id="doctorOrderTable">
  <div class="me-2 mb-2 mt-3">
  <h3 style="float:left;color:#1353c9;">Doctor's Orders</h3>
    <button id="addbtn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctorOrderModal" style="float:right;background-color:#1f66d1; width:120px;">
    + New Order
    </button>
  </div>
      <thead>
          <tr style="background-color:#1353c9;" class="text-light">
              <th>Patient ID</th>
              <th>Patient Name</th>
              <th>Room</th>
              <th>Date Ordered</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
      @foreach($doctor_orders as $doctor_order)
      @foreach($room_num as $room_nums)
      @foreach($patient_name as $patient_names)
          @if($doctor_order->id == $room_nums->doctor_orders_id && $doctor_order->id == $patient_names->doctor_orders_id)
              <tr>
                  <td>{{ $patient_names->id}}</td>
                  <td>{{ ($patient_names->firstname)." ".($patient_names->lastname) }}</td> 
                  <td>{{ $room_nums->room}}</td>
                  <td>{{ date_format(new DateTime($doctor_order->created_at), "F j, Y g:i A") }}</td>
                  <td>
                      <a href="{{ route('orders', $doctor_order->id) }}" class="btn btn-sm text-light fa-sharp fa-solid fa-clipboard" style="background-color:#1f66d1; "></a>
                      <button class="btn btn-sm btn-danger text-light me-1 fa-sharp fa-solid fa-trash" id="{{ $doctor_order->id }}" onClick="reply_click_doctorOrder(this.id)"></button>
                  </td>
              </tr> <!-- To trigger the sweet alert (per ID) -->
              <script type="text/javascript">
               function reply_click_doctorOrder(clicked_id) {
              Swal.fire({
                title: 'Delete Order Record?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1f66d1',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = "{{ route('destroyDoctorOrder', '') }}" + "/" + clicked_id;
                  // Redirect to the "doctorsOrders" view after the record is deleted
                setTimeout(function() {
                    window.location.href = "{{ route('doctorsOrders') }}";
                }, 1000);
                  Swal.fire({
                    title: 'Deleted!',
                    text: 'Order Record has been deleted.',
                    icon: 'success',
                    showConfirmButton: false
                  });
                }
              });
            }
              </script>
          @endif
      @endforeach
      @endforeach
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
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>
 <script>
   $(document).ready( function () {
     $('#doctorOrderTable').DataTable({
         "pageLength": 8,
         "lengthChange": false
     });
 } );  
 </script>

 
<!--Modal-->
<div class="modal fade" id="doctorOrderModal" tabindex="-1" aria-labelledby="doctorOrderModalLabel" aria-hidden="true">
  <<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(66,100,208);">
        <h5 class="modal-title text-light" id="doctorOrderModal" >Add new order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
        <form class="patientsList-form" method="POST" action="{{ route('storeDoctorOrders')}}">
          @csrf
          <div class="col-12 pt-2 d-inline-block">
            <div class="form-group p-2">
              <label for="patientsList" class="form-label">Admitted Patient List:</label>
              <select class="form-select" id="patientsList" name="patientsList" required>
                <option value="">Choose...</option>
                @foreach($admittedPatient as $admittedPatients)
                <option value="{{ $admittedPatients->admission_id.','.$admittedPatients->primary_doctor_id }}">{{ ($admittedPatients->firstname)." ".($admittedPatients->lastname) }}</option>
               @endforeach
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
