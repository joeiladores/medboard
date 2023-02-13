@extends('layouts.NurseLayout')

@section('content')
<title>Doctor's Orders</title>
<style>
    /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  /* font-family: Arial; */
  /* overflow-x:hidden;
  overflow-y:hidden; */
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
  height: 8%;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 50px 50px 0px 0px;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: rgb(14, 0, 0);
  display: none;
  padding: 50px 20px;
  padding-top:70px;
  margin: 14px;
  height: 390px;
  border-radius: 50px 50px 25px 25px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
#Medication {background-color: white;}
#Transfusion {background-color: white;}
#Treatment {background-color: white;}
#ProgressNotes {background-color: white;}


</style>

<a href="{{ route('nurseHome') }}" style="background-color:#1f66d1;" class="btn btn-light btn-sm text-light p-2">← Go back</a>
  <div class="card rounded shadow m-3" style="background-color:#d4ebf8;">
  <div class="card-body m-2">
  <div class="d-flex justify-content-between">
  <h6 style="color:#1353c9;">Patient ID: {{ $doctor_order->admission_id }}</h6>
  <div>
        <h6 style="color:#1353c9;" class="mr-5 pr-5">{{ date_format(new DateTime($doctor_order->created_at), "F j, Y g:i A") }}</h6>
  </div>
  </div>
  <h6 style="color:#1353c9;">Patient Name: {{ $admittedPatient->firstname . " " . $admittedPatient->lastname }}</h6>
  <h6 style="color:#1353c9;"> Room: {{ $roomNumber->room }} </h6>
  <div class="d-flex justify-content-between">
  <h6 class="mr-2"></h6>
  <!-- Progress Notes Modal Button -->
<button id="addbtn" type="button" class="btn btn-primary d-inline-block" data-bs-toggle="modal" data-bs-target="#progressNotesModal" style="background-color:#1f66d1;">
  + Progress Notes
  </button>
</div>
</div>
</div>



  
  <!-- Progress Notes Modal-->
  <div class="modal fade" id="progressNotesModal" tabindex="-1" aria-labelledby="progressNotesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#1353c9;">
          <h5 class="modal-title text-light" id="progressNotesModal">Add Progress Note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="progressNote-form" method="POST" action="{{ route('storeNurseProgressNote') }}">
        @csrf
        <input type="hidden" name="doctor_order_id" value="{{ $doctor_order->id }}">
        <div class="mb-3">
        <textarea class="form-control col-9" id="progress_notes" name="progress_notes" rows="10" required>Nurse {{ Auth::user()->firstname . " " . Auth::user()->lastname }}:</textarea>
      </div>
      <div>
                  <!-- Add Progress Note trigger button -->
                  <button type="submit" class="btn btn-primary m-2" style="background-color:#1353c9;float:right" onclick="validateProgressNoteForm()">Add</button>
                  <button id="closeBtn" type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal" style="float:right">Close</button>
                  </div>
                  <!-- Add Progress Note Validation -->
                  <script>
                    function validateProgressNoteForm() {
                      var progress_notes = document.getElementById("progress_notes").value;
  
                      if (progress_notes === "") {
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          confirmButtonColor: 'rgb(66,100,208)',
                          text: 'Please fill out the required field before submitting!'
                        });
                      } else {
                        Swal.fire({
                        title: 'Success!',
                        text: 'New Progress note record has been added!',
                        icon: 'success',
                        showConfirmButton: false,
                        });
                      }
                    }
                  </script>
  </form>
  
        </div>
      </div>
    </div>
  </div>

  

<!-- TABS -->
<div class="m-3">
  <button class="tablink" onclick="openPage('Medication', this, '#1f66d1')" id="defaultOpen">Medication</button>
  <button class="tablink" onclick="openPage('Transfusion', this, '#1f66d1')">Transfusion</button>
  <button class="tablink" onclick="openPage('Treatment', this, '#1f66d1')">Treatment</button>
  <button class="tablink" onclick="openPage('ProgressNotes', this, '#1f66d1')">Progress&nbsp;Notes</button>
</div>


<div id="Medication" class="tabcontent mt-4">
<table class="table" id="medicationTable">
            <thead>
                <tr>
                    <th>Medication</th>
                    <th>Quantity</th>
                    <th>Dosage</th>
                    <th>Unit</th>
                    <th>Frequency</th>
                    <th>Instructions</th>
                    <th>Date Start</th>
                    <th>Date Stopped</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_medications as $order_medication)
                <tr>
                    <td>{{ $order_medication->medication }}</td>
                    <td>{{ $order_medication->quantity }}</td>
                    <td>{{ $order_medication->dose }}</td>
                    <td>{{ $order_medication->unit }}</td>
                    <td>{{ $order_medication->frequency }}</td>
                    <td>{{ $order_medication->instructions }}</td>
                    <td>{{ $order_medication->date_started ? date_format(new DateTime($order_medication->date_started), "F j, Y") : '' }}</td>
                    <td>{{ $order_medication->date_stopped ? date_format(new DateTime($order_medication->date_stopped), "F j, Y") : '' }}</td>
                    <td class="d-flex">
                      <a href="{{ route('editNurseMedication', $order_medication->id) }}" class="btn btn-sm text-light fa-sharp fa-solid fa-pen-to-square" style="background-color:#1f66d1;"></a>
                   </td>
                   <!-- To trigger the sweet alert (per ID) -->
                      <script type="text/javascript">
                       function reply_click_medication(clicked_id) {
                      Swal.fire({
                        title: 'Delete Medication Record?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: 'rgb(66,100,208)',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirm'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          window.location.href = "{{ route('destroyMedication', '') }}" + "/" + clicked_id;
                          Swal.fire({
                            title: 'Deleted!',
                            text: 'Medication Record has been deleted.',
                            icon: 'success',
                            showConfirmButton: false
                          });
                        }
                      });
                    }
                      </script>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Transfusion" class="tabcontent mt-4">
<table class="table" id="transfusionTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Fluid</th>
                    <th>Instructions</th>
                    <th>Date Started</th>
                    <th>Date Stopped</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_transfusions as $order_transfusion)
                <tr>
                    <td>{{ $order_transfusion->type }}</td>
                    <td>{{ $order_transfusion->fluid_name }}</td>
                    <td>{{ $order_transfusion->instruction }}</td>
                    <td> {{ $order_transfusion->date_stopped ? date_format(new DateTime($order_transfusion->date_started), "F j, Y") : '' }}</td>
                    <td> {{ $order_transfusion->date_stopped ? date_format(new DateTime($order_transfusion->date_stopped), "F j, Y") : '' }}</td>
                    <td class="d-flex">
                     <a href="{{ route('editNurseTransfusion', $order_transfusion->id) }}" class="btn btn-sm text-light fa-sharp fa-solid fa-pen-to-square" style="background-color:#1f66d1;"></a>
                   </td>
                   <!-- To trigger the sweet alert (per ID) -->
                      <script type="text/javascript">
                        function reply_click_transfusion(clicked_id) {
                          Swal.fire({
                            title: 'Delete Transfusion Record?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: 'rgb(66,100,208)',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Confirm'
                          }).then((result) => {
                            if (result.isConfirmed) {
                              window.location.href = "{{ route('destroyTransfusion', '') }}" + "/" + clicked_id;
                              Swal.fire({
                                title: 'Deleted!',
                                text: 'Transfusion Record has been deleted.',
                                icon: 'success',
                                showConfirmButton: false
                            });
                            }
                          });
                        }
                      </script>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Treatment" class="tabcontent mt-4">
<table class="table" id="treatmentTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Instructions</th>
                    <th>Date Started</th>
                    <th>Date Done</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_treatments as $order_treatment)
                <tr>
                    <td>{{ $order_treatment->name }}</td>
                    <td>{{ $order_treatment->type }}</td>
                    <td>{{ $order_treatment->instruction }}</td>
                    <td> {{ $order_treatment->date_started ? date_format(new DateTime($order_treatment->date_started), "F j, Y") : '' }}</td>
                    <td> {{ $order_treatment->date_done ? date_format(new DateTime($order_treatment->date_done), "F j, Y") : '' }}</td>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="ProgressNotes" class="tabcontent mt-4">
<table class="table" id="progressNotesTable">
            <thead>
                <tr>
                    <th>Date Created</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
            @foreach($progress_notes  as $progress_note)
                <tr>
                <td>{{ date_format(new DateTime($progress_note->created_at), "F j, Y") }}</td>
                    <td>{{ $progress_note->notes }}</td>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
 <!-- For DataTables -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>
 <script>
  
  $(document).ready( function () {
     $('#medicationTable').DataTable({
         "pageLength": 4,
         "lengthChange": false
     });
 } ); 

 $(document).ready( function () {
     $('#transfusionTable').DataTable({
         "pageLength": 4,
         "lengthChange": false
     });
 } ); 

 $(document).ready( function () {
     $('#treatmentTable').DataTable({
         "pageLength": 4,
         "lengthChange": false
     });
 } ); 

 $(document).ready( function () {
     $('#progressNotesTable').DataTable({
         "pageLength": 4,
         "lengthChange": false
     });
 } ); 
 </script>
<!-- For Sweet Alert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
 <!-- For Font Awesome -->
 <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">

<script>
  // For Tabs
  function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


@endsection
