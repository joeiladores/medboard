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
  padding: 100px 20px;
  height: 100%;
}

#Medication {background-color: white;}
#Transfusion {background-color: gray;}
#Treatment {background-color: gray;}
#Notes {background-color: gray;}

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
      <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="col-9 p-2">
                    <label for="medication" class="form-label">Medication</label>
                    <input type="text" class="form-control" id="medication" name="medication" required>
                </div>
                <div class="col-9 p-2">
                    <label for="dose" class="form-label">Dosage</label>
                    <input type="text" class="form-control" id="dose" name="dose" required>
                </div>
                <div class="col-9 p-2">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="col-9 p-2">
                    <div class="form-group">
                      <label for="unit">Unit:</label>
                      <select id="unit" name="unit" class="form-control custom-select">
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

<!-- IV/Blood Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transfusionModal" style="background-color:rgb(66,100,208);">
  Transfusion
</button>

<!-- IV/Blood Modal-->
<div class="modal fade" id="transfusionModal" tabindex="-1" aria-labelledby="transfusionLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="transfusionModal">This modal is for transfusion</h5>
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

<!-- Treatment Modal Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#treatmentModal" style="background-color:rgb(66,100,208);">
Treatment
</button>

<!-- Treatment Modal-->
<div class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="treatmentModal">This modal is for Treatment</h5>
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
<table class="table mt-3">
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
                    <td>{{ $order_medication->quantity }}</td>
                    <td>{{ $order_medication->unit }}</td>
                    <td>{{ $order_medication->frequency }}</td>
                    <td>{{ $order_medication->instructions }}</td>
                    <td>{{ $order_medication->date_started }}</td>
                    <td>{{ $order_medication->date_stopped }}</td>
                    <td><a type="button" class="btn text-light" style="background-color:rgb(66,100,208);">Edit</a>
                </tr>
                @endforeach
            </tbody>
           </table>
</div>

<div id="Transfusion" class="tabcontent">
  <h3>Transfusion</h3>
  <p>DISPLAY Transfusion HERE</p>
</div>

<div id="Treatment" class="tabcontent">
  <h3>Treatment</h3>
  <p>DISPLAY Treatment HERE</p>
</div>

<div id="Notes" class="tabcontent">
  <h3>Notes</h3>
  <p>DISPLAY Notes HERE</p>
</div>

<script>
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
