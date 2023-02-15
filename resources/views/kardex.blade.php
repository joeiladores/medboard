@extends($layout, ['title' => $title])
@section('content')

<style>
  body {
    background-color: #F3F3F9;
  }
</style>


<div class="container p-3">
  <div class="d-flex primary-bg rounded-3 p-2 justify-content-center">
    <h5 class="f-roboto fw-bold text-light my-auto">KARDEX</h5>
  </div>

  <div class="container">
    @foreach($kardexinfo as $kardex)
    <!-- Personal Information -->
    <div class="fw-bold fs-4 mt-3">PATIENT</div>
    <div class="row bg-white p-3 rounded-2 shadow">
      <div class="col-md">
        <div>NAME: <span class="fs-roboto fw-bold fs-5"> {{ $kardex->p_lastname }}, {{ $kardex->p_firstname }} {{ $kardex->p_midname }}</span></div>
        <div>AGE: <span class="fs-roboto fw-bold fs-5">{{ $kardex->age }}</span></div>
        <div>GENDER: <span class="fs-roboto fw-bold fs-5">{{ ucfirst($kardex->gender) }}</span></div>
      </div>
      <div class="col-md">
        <div>ADDRESS: <span class="f-roboto fw-bold fs-5">{{ $kardex->address }}</span></div>
        <div>BLOOD TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->blood_type }}</span></div>
        <div>WEIGHT: <span class="f-roboto fw-bold fs-5">{{ $kardex->weight }}</span></div>
      </div>
    </div>

    <!-- Admission -->
    <div class="fw-bold fs-4 mt-3">ADMISSION INFO</div>
    <div class="row">
      <div class="col-md bg-white p-3 me-3 rounded-2 shadow">
        <div>ADMISSION NUMBER: <span class="f-roboto fw-bold fs-5">{{ $kardex->id }}</span></div>
        <div>DATE/TIME ADMITTED: <span class="f-roboto fw-bold fs-5">{{ date("M. j, Y h:i A", strtotime($kardex->created_at)) }}</span></div>
        <div>BED/ROOM/TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->bednum }} /Room {{ $kardex->room }} / {{ $kardex->room_type }}</span></div>

        <div>ADMITTING DOCTOR: <span class="f-roboto fw-bold fs-5">Dr. {{ $kardex->ad_firstname }} {{ $kardex->ad_lastname }}, MD</span></div>
        <div class="bg-light text-primary">COMPLAINT: <span class="f-roboto fw-bold fs-5">{{ $kardex->complain }}</span></div>
        <div class="bg-light text-primary">IMPRESSION DIAGNOSIS: <span class="f-roboto fw-bold fs-5">{{ $kardex->impression_diagnosis }}</span></div>
      </div>
      <div class="col-md bg-white p-3 rounded-2 shadow">
        <div>ADMISSION TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->type }}</span></div>
        <div>PRIMARY DOCTOR: <span class="f-roboto fw-bold fs-5">Dr. {{ $kardex->pd_firstname }} {{ $kardex->pd_lastname }}, MD</div>
        <div>SURGERY DONE: <span class="f-roboto fw-bold fs-5"></span> </div>
        <div>DATE/TIME OF SURGERY: <span class="f-roboto fw-bold fs-5"> </span></div>
      </div>
    </div>

    <div class="row bg-white fw-bold fs-4 p-3 mt-3">
      <!-- Mental Status -->
      <div class="col-2">
        <div>Mental Status: </div>
        <span class="f-roboto fw-bold fs-5">{{ $kardex->mental_status }}</span>
      </div>

      <!-- Activities -->
      <div class="col-2">
        <div>Activities: </div>
        <span class="f-roboto fw-bold fs-5">{{ $kardex->activities }}</span>
      </div>

      <!-- Diet -->
      <div class="col-2">
        <div>Diet: </div>
        <span class="f-roboto fw-bold fs-5">{{ $kardex->diet }}</span>
      </div>

      <!-- Tubes -->
      <div class="col-2">
        <div>Tubes: </div>
        <span class="f-roboto fw-bold fs-5">{{ $kardex->tubes }}</span>
      </div>

      <!-- Specific Inof -->
      <div class="col-2">
        <div>Special Info: </div>
        <span class="f-roboto fw-bold fs-5">{{ $kardex->special_info }}</span>
      </div>
    </div>
    @endforeach

    <!-- Tab Pill -->
    <!-- <div class="container pt-3">
      <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-1 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
        <li class="nav-item" role="presentation">
          <button class="nav-link active rounded-1" id="tab1_medication" data-bs-toggle="tab" data-bs-target="#tab1-medication" type="button" role="tab" aria-selected="true">Medication</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link rounded-1" id="tab2_fluid" data-bs-toggle="tab" data-bs-target="#tab2_fluid" type="button" role="tab" aria-selected="false">IV FLuid/Blood</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link rounded-1" id="tab3_treatment" data-bs-toggle="tab" data-bs-target="#tabe-treatment" type="button" role="tab" aria-selected="false">Laboratory/Treatment</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link rounded-1" id="tab4_progressnotes" data-bs-toggle="tab" data-bs-target="#tab4-progressnotes" type="button" role="tab" aria-selected="false">Doctor's Progress Notes</button>
        </li>
      </ul>
    </div> -->

    <div class="tab-content" id="myTabContent">
      <!-- Tab1 - Medication -->
      <div id="tab1_medication" class="mt-4 p-4 bg-white">
        <div class="d-flex justify-content-center fw-bold fs-5">MEDICATION SHEET</div>
        <table class="table" id="medicationTable">
          <thead class="primary-bg text-light">
            <tr>
              <th>Medication</th>
              <th>Quantity</th>
              <th>Dosage</th>
              <th>Unit</th>
              <th>Frequency</th>
              <th>Instructions</th>
              <th>Date Start</th>
              <th>Date Stopped</th>
            </tr>
          </thead>
          <tbody>
            @foreach($medications as $medication)
            <tr>
              <td>{{ $medication->medication }}</td>
              <td>{{ $medication->quantity }}</td>
              <td>{{ $medication->dose }}</td>
              <td>{{ $medication->unit }}</td>
              <td>{{ $medication->frequency }}</td>
              <td>{{ $medication->instructions }}</td>
              <td>{{ $medication->date_started ? date_format(new DateTime($medication->date_started), "F j, Y") : '' }}</td>
              <td>{{ $medication->date_stopped ? date_format(new DateTime($medication->date_stopped), "F j, Y") : '' }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Tab 2 - FLuid -->
      <div id="tab2_fluid" class="mt-4 p-4 bg-white">
        <div class="d-flex justify-content-center fw-bold fs-5">IV FLUID/BLOOD TRANSFUSION</div>
        <table class="table" id="transfusionTable">
          <thead class="primary-bg text-light">
            <tr>
              <th>Type</th>
              <th>Fluid</th>
              <th>Instructions</th>
              <th>Date Started</th>
              <th>Date Stopped</th>
            </tr>
          </thead>
          <tbody>
            @foreach($fluids as $fluid)
            <tr>
              <td>{{ $fluid->type }}</td>
              <td>{{ $fluid->fluid_name }}</td>
              <td>{{ $fluid->instruction }}</td>
              <td> {{ $fluid->date_stopped ? date_format(new DateTime($fluid->date_started), "F j, Y") : '' }}</td>
              <td> {{ $fluid->date_stopped ? date_format(new DateTime($fluid->date_stopped), "F j, Y") : '' }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Tab 3 - Laboratory/Treatment -->
      <div id="tab3_treatment" class="mt-4 p-4 bg-white">
        <div class="d-flex justify-content-center fw-bold fs-5">LABORATORY/TREATMENT</div>
        <table class="table" id="treatmentTable">
          <thead class="primary-bg text-light">
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Instructions</th>
              <th>Date Started</th>
              <th>Date Done</th>
            </tr>
          </thead>
          <tbody>
            @foreach($treatments as $treatment)
            <tr>
              <td>{{ $treatment->name }}</td>
              <td>{{ $treatment->type }}</td>
              <td>{{ $treatment->instruction }}</td>
              <td> {{ $treatment->date_started ? date_format(new DateTime($treatment->date_started), "F j, Y") : '' }}</td>
              <td> {{ $treatment->date_done ? date_format(new DateTime($treatment->date_done), "F j, Y") : '' }}</td>
              </script>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Tab 4- Doctor's Notes -->
      <div id="tab4_progressnotes" class="mt-4 p-4 bg-white">
        <div class="d-flex justify-content-center fw-bold fs-5">DOCTOR's PROGRESS NOTES</div>
        <table class="table" id="progressNotesTable">
          <thead class="primary-bg text-light">
            <tr>
              <th>Date Created</th>
              <th>Notes</th>
            </tr>
          </thead>
          <tbody>
            @foreach($progressnotes as $progressnote)
            <tr>
              <td>{{ date_format(new DateTime($progressnote->created_at), "F j, Y g:i A") }}</td>
              <td>{{ $progressnote->notes }}</td>
              </script>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- For DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() {
        $('#medicationTable').DataTable({
          responsive: true,
          fixedHeader: true
        });
      });

      $(document).ready(function() {
        $('#transfusionTable').DataTable({
          responsive: true,
          fixedHeader: true
        });
      });

      $(document).ready(function() {
        $('#treatmentTable').DataTable({
          responsive: true,
          fixedHeader: true
        });
      });

      $(document).ready(function() {
        $('#progressNotesTable').DataTable({
          responsive: true,
          fixedHeader: true
        });
      });
    </script>


    @endsection