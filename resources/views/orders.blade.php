@extends('layouts.orders')

@section('content')
<style>
    /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
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
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 50px 20px;
  height: 100%;
}

#Medication {background-color: white;}
#Transfusion {background-color: white;}
#Treatment {background-color: white;}
#Notes {background-color: white;}



</style>

  <div class="card rounded shadow mb-2">
  <div class="card-body">
  <div class="d-flex justify-content-between">
  <h6>Patient ID: 1</h6>
  <div>
        <h6 class="mr-5 pr-5">Date: Jan 26,2023</h6>
  </div>
  </div>
  <h6>Patient Name: Juan Luna</h6>
   <h6> Room ID: A01 </h6>
  <div class="d-flex justify-content-between">
  <h6 class="mr-2">Assigned Nurse: Cruz</h6>
  <div>
    
<!-- Medication Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medicationModal" style="background-color:rgb(66,100,208);">
  Medication
</button>

<!-- Medication Modal-->
<div class="modal fade" id="medicationModal" tabindex="-1" aria-labelledby="medicationModalLabel" aria-hidden="true">
  <<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="medicationModal">Add Medication</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
      <form method="POST" action="{{ route('storeMedication') }}">
                @csrf
                <div class="col-12 p-2">
                    <label for="medication" class="form-label">Medication</label>
                    <input type="text" class="form-control" id="medication" name="medication" required>
                </div>
                <div class="col-4 p-2 d-inline-block">
                    <label for="dose" class="form-label">Dosage</label>
                    <input type="text" class="form-control" id="dose" name="dose" required>
                </div>
                <div class="col-4 pt-2 d-inline-block">
                <div class="form-group">
                <label for="unit" class="form-label">Unit:</label>
                    <select class="form-select" id="unit" name="unit">
                        <option selected>Choose...</option>
                        <option value="Gram">Gram</option>
                        <option value="Milligram">Milligram</option>
                        <option value="Microgram">Microgram</option>
                    </select>
                    </div>
                    <script>
                      var select = document.getElementById("unit");
                    var selectedValue = select.options[select.selectedIndex].value;
                    console.log(selectedValue);
                    </script>
                </div>
                <div class="col-3 ps-3 d-inline-block">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="col-9 p-2">
                    <label for="frequency" class="form-label">Frequency</label>
                    <input type="text" class="form-control" id="frequency" name="frequency" required>
                </div>
                <div class="col-9 p-2">
                    <label for="instructions" class="form-label">Instructions</label>
                    <input type="text" class="form-control" id="instructions" name="instructions" required>
                </div>
                <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Transfusion Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transfusionModal" style="background-color:rgb(66,100,208);">
  Transfusion
</button>

<!-- Transfusion Modal-->
<div class="modal fade" id="transfusionModal" tabindex="-1" aria-labelledby="transfusionLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="transfusionModal">Add Transfusion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
      <form method="POST" action="{{ route('storeTransfusion') }}">
                @csrf
                <div class="col-5 p-2 d-inline-block">
                <div class="form-group">
                <label for="type" class="form-label">Type:</label>
                    <select class="form-select" id="type" name="type">
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
                    <input type="text" class="form-control" id="fluid_name" name="fluid_name" required>
                </div>
                <div class="col-9 p-2">
                    <label for="instruction" class="form-label">Instructions:</label>
                    <input type="text" class="form-control" id="instruction" name="instruction" required>
                </div>
                <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Transfusion Modal-->

<!-- Treatment Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#treatmentModal" style="background-color:rgb(66,100,208);">
Treatment
</button>

<!-- Treatment Modal-->
<div class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="treatmentModal">Add Laboratory Treatment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
      <form method="POST" action="{{ route('storeTreatment') }}">
                @csrf
                <div class="col-6 p-2 d-inline-block">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-6 p-2 d-inline-block">
                    <label for="type" class="form-label">Treatment Type:</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="col-9 p-2">
                    <label for="instruction" class="form-label">Instructions:</label>
                    <input type="text" class="form-control" id="instruction" name="instruction" required>
                </div>

                <div class="col-9 p-2">
                        <div class="col-lg-6 col-sm-6">
                        <label for="date_started">Date Start:</label>
                        <input class="form-control" type="date" id="date_started" name="date_started"  required/>
                        </div>
                </div>
                <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Progress Notes Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#progressNotesModal" style="background-color:rgb(66,100,208);">
Progress Notes
</button>

<!-- Progress Notes  Modal-->
<div class="modal fade" id="progressNotesModal" tabindex="-1" aria-labelledby="progressNotesLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="progressNotesModal">This modal is for progressNotes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color:rgb(66,100,208);">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>

<!-- TABS -->
<button class="tablink" onclick="openPage('Medication', this, 'rgb(66,100,208)')" id="defaultOpen">Medication</button>
<button class="tablink" onclick="openPage('Transfusion', this, 'rgb(66,100,208)')">Transfusion</button>
<button class="tablink" onclick="openPage('Treatment', this, 'rgb(66,100,208)')">Treatment</button>
<button class="tablink" onclick="openPage('Notes', this, 'rgb(66,100,208)')">Progress Notes</button>


<div id="Medication" class="tabcontent">
<table class="table" id="medicationTable">
            <thead>
                <tr>
                    <th>Medication</th>
                    <th>Dosage</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Frequency</th>
                    <th>Instructions</th>
                    <th>Date Start</th>
                    <th>Date Stop</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_medications as $order_medication)
                <tr>
                    <td>{{ $order_medication->medication }}</td>
                    <td>{{ $order_medication->dose }}</td>
                    <td>{{ $order_medication->unit }}</td>
                    <td>{{ $order_medication->quantity }}</td>
                    <td>{{ $order_medication->frequency }}</td>
                    <td>{{ $order_medication->instructions }}</td>
                    <td>{{ $order_medication->date_started }}</td>
                    <td>{{ $order_medication->date_stopped }}</td>
                    <td class="d-flex justify-content-between">
                      <a href="{{ route('destroyMedication', $order_medication->id) }}" class="btn btn-sm btn-danger text-light me-1">Delete</a>
                      <a href="{{ route('editMedication', $order_medication->id) }}" class="btn btn-sm text-light" style="background-color:rgb(66,100,208);">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Transfusion" class="tabcontent">
<table class="table" id="transfusionTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Fluid</th>
                    <th>Instructions</th>
                    <th>Date Started</th>
                    <th>Date Stopped</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_transfusions as $order_transfusion)
                <tr>
                    <td>{{ $order_transfusion->type }}</td>
                    <td>{{ $order_transfusion->fluid_name }}</td>
                    <td>{{ $order_transfusion->instruction }}</td>
                    <td>{{ $order_transfusion->date_started }}</td>
                    <td>{{ $order_transfusion->date_stopped }}</td>
                    <td class="d-flex">
                      <a href="{{ route('destroyTransfusion', $order_transfusion->id) }}" class="btn btn-sm btn-danger text-light me-1">Delete</a>
                      <a href="{{ route('editTransfusion', $order_transfusion->id) }}" class="btn btn-sm text-light" style="background-color:rgb(66,100,208);">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Treatment" class="tabcontent">
<table class="table" id="transfusionTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Fluid</th>
                    <th>Instructions</th>
                    <th>Date Started</th>
                    <th>Date Stopped</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order_transfusions as $order_transfusion)
                <tr>
                    <td>{{ $order_transfusion->type }}</td>
                    <td>{{ $order_transfusion->fluid_name }}</td>
                    <td>{{ $order_transfusion->instruction }}</td>
                    <td>{{ $order_transfusion->date_started }}</td>
                    <td>{{ $order_transfusion->date_stopped }}</td>
                    <td class="d-flex">
                      <a href="{{ route('destroyTransfusion', $order_transfusion->id) }}" class="btn btn-sm btn-danger text-light me-1">Delete</a>
                      <a href="{{ route('editTransfusion', $order_transfusion->id) }}" class="btn btn-sm text-light" style="background-color:rgb(66,100,208);">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Notes" class="tabcontent">
  <h3>Notes</h3>
  <p>DISPLAY Notes HERE</p>
</div>
<!-- For DataTables -->
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">


</script>

<script>
  var dataTable = new DataTable("#medicationTable");
  var dataTable = new DataTable("#transfusionTable");

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
