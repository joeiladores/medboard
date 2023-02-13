@extends('layouts.NurseLayout')

@section('content')
<style>
body {
  height: 100%;
  margin: 0;
  /* font-family: Arial; */
  /* overflow-x: hidden;
  overflow-y: hidden; */
}
/* Defaults */
#DashboardCard{
    height:35%;
    background: linear-gradient(180deg, rgba(66, 100, 208, 0.7) 0%, #4264D0 100%);
    border-radius:30px;
}
#tableSize{
  color: rgb(14, 0, 0);
  padding: 50px;
  height: 620px;
  border-radius: 50px 50px 25px 25px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}


/* Responsiveness */
@media only screen and (max-width: 1000px) {
    #DashboardCard{
    height:10%;
}
  #DashboardSide {
    display: none;
  }
}
@media only screen and (max-width: 720px) {
  #DashboardSide {
    display: none;
  }

}
@media only screen and (max-width: 660px) {
    #DashboardCard{
    height:25%;
}
  #DashboardSide {
    display: none;
  }
 
}
@media only screen and (max-width: 500px) {
    #DashboardCard{
    height:22%;
}
#DashboardText{
    font-size:15px;
    padding:
}
  #DashboardSide {
    display: none;
  }

}



</style>

<div class="row">
  <div class="col-lg-10">
    <div class="card shadow" id="DashboardCard" style="display:none;">
        
</div>
    <div class="row">
    <div class="col-lg-12">
      <div class="card rounded shadow p-2" id="tableSize">
      <h5 class="pt-3 ms-2" style="color:#1353c9;">Admitted Patients List</h5>
      <table class="table" id="nursesDashboardTable">
        <thead class="text-light">
          <tr style="background:#1353c9;">
            <th>Patient ID</th>
            <th>Patient Name</th>
            <th>Primary Doctor Name</th>
            <th>Admission Date</th>
            <th>Room</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($patientAdmitted as $patient)
            <tr>
                <td>{{ $patient->patient_id }}</td>
                <td>{{ $patient->patient_firstname }} {{ $patient->patient_lastname }}</td>
                <td>Dr. {{ $patient->doctor_firstname }} {{ $patient->doctor_lastname }}</td>
                <td>{{ date_format(new DateTime( $patient->admission_date), "F j, Y g:i A") }}</td>
                <td>{{ $patient->room }}</td>
            </tr>
        @endforeach
        </tbody>
       </table>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2" id="DashboardSide">
    <!-- Side Profile -->
    <div style="padding:15%; height:530px; background-color: #d4ebf8;border-radius: 30px 30px 0px 0px;border: 1px solid #00020518;">
      <center>
        <img class="mb-2" src="{{ asset('images/nurseprofile.png') }}" alt="Image" style="width: 100%; height: 30%;">
        <p style="font-size:17px; font-weight:600;color:#1353c9;">Nurse {{ Auth::user()->firstname . " " . Auth::user()->lastname }}</p>
        <p style="font-size:14px; font-weight:600;color:#1353c9;">{{ $specialization->name }}</p>
      </center>
  </div>
   <!--END Side Profile -->

  <!-- Side Time/Date -->
  <div class="mt-2 p-2 text-light" style="height:100px;background-color: #d4ebf8;border-radius: 0px 0px 30px 30px; border: 1px solid #00020518;">
  <center>
      <h6 style="color:#1353c9;" id="currentDate"></h6>
      <h2 style="color:#1353c9;" id="currentTime"></h2>
  </center>
  <script>
      const currentDate = new Date();
      const dateOptions = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
      const timeOptions = { hour: '2-digit', minute: '2-digit' };

      document.getElementById("currentDate").innerHTML = currentDate.toLocaleDateString('en-US', dateOptions);
      document.getElementById("currentTime").innerHTML = currentDate.toLocaleTimeString('en-US', timeOptions);
  </script>
  </div>
  <!--END Side Time/Date -->
  </div>
</div>
</div>



<!------------------------------------------------------ CDN HERE------------------------------------------------------------------->

<!-- JQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<!-- For DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#nursesDashboardTable').DataTable({
        "pageLength": 10,
        "lengthChange": false
    });
} );  
</script>


<!-- For Sweet Alert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
 <!-- For Font Awesome -->
 <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">

 
@endsection
