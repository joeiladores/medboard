@extends('layouts.NurseLayout')

@section('content')
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-size: 0.9375rem;
  /* font-family: 'Roboto+Mono', sans-serif; */
  font-family: 'Poppins', sans-serif;
}
/* Defaults */
#DashboardCard{
    height:35%;
    background-color:#d4ebf8;
    border-radius:30px;
    border: 1px solid #00020518;"
}
#DashboardText{
    padding:4%;
}
#DashboardNurseImg{
    width: 30%;
    height: 115%;
}

#tableSize{
  color: rgb(14, 0, 0);
  padding: 50px;
  height: 410px;
  border-radius: 50px 50px 25px 25px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

/* Responsiveness */
@media only screen and (max-width: 1000px) {
    #DashboardCard{
    height:30%;
}
  #DashboardSide {
    display: none;
  }
}
@media only screen and (max-width: 720px) {
  #DashboardSide {
    display: none;
  }
  #DashboardNurseImg{
    width: 45%;
    height: 90%;
    margin: 2px;
  }
}
@media only screen and (max-width: 660px) {
    #DashboardCard{
    height:25%;
}
  #DashboardSide {
    display: none;
  }
  #DashboardNurseImg{
    width: 45%;
    height: 80%;
    margin: 2px;
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
  #DashboardNurseImg{
    width: 40%;
    height: 90%;
  }
  #tableSize{
  height: 530px;
}
}





</style>

<div class="row">
  <div class="col-lg-10">
    <div class="card shadow" id="DashboardCard">
        <h4 id="DashboardText" style="position: absolute; color:#1353c9;">Good Day, Nurse {{ Auth::user()->firstname . " " . Auth::user()->lastname }}<br><br>
        <p style="font-size:15px; color:#1353c9;">
          @if(isset($assigned_station) && $assigned_station->station)
          Today, you are assigned to <b>{{ $assigned_station->station }}</b><br> 
          Have a nice day at work!</p>
        @else
          No assigned station
        @endif
        </h4>
    <!-- Nurse Dashboard img -->
    <div style="text-align:right;">
        <img id="DashboardNurseImg" src="{{ asset('images/nursedashboard.png') }}" alt="Image">
    </div>
</div>


    <div class="row">
    <div class="col-lg-12">
      <div class="card rounded shadow mt-2 p-2" id="tableSize">
      <table class="table" id="nursesDashboardTable">
      <h5 class="pt-3 ms-2" style="color:#1353c9;">Patients under your station with Doctor's orders</h5>
            <thead>
                <tr style="background:#1353c9;">
                  <th class="text-light">Assigned Doctor</th>
                  <th class="text-light">Patient Name</th>
                  <th class="text-light">Room</th>
                  <th class="text-light">Date Ordered</th>
                  <th class="text-light">Action</th>
                </tr>
            </thead>
            <tbody>
              @if(isset($patientsInStation))
              @foreach($patientsInStation as $patientsInStations)
        <tr>
            <td>Dr. {{ $patientsInStations->doctor_firstname . " " . $patientsInStations->doctor_lastname }}</td>
            <td>{{ $patientsInStations->firstname }} {{ $patientsInStations->lastname }}</td>
            <td>{{ $patientsInStations->room }}</td>
            <td>{{ date_format(new DateTime( $patientsInStations->created_at), "F j, Y g:i A") }}</td>
            <td>
              <a href="{{ route('nurseDoctorOrdersView', $patientsInStations->id) }}" class="btn btn-sm text-light fa-sharp fa-solid fa-clipboard" style="background-color:#1f66d1;"></a>
            </td>
        </tr>
        @endforeach
        @endif
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
        "pageLength": 5,
        "lengthChange": false
    });
} );  
</script>


<!-- For Sweet Alert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
 <!-- For Font Awesome -->
 <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">

 
@endsection
