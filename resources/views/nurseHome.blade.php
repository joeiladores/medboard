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
#DashboardText{
    padding:4%;
}
#DashboardNurseImg{
    width: 30%;
    height: 115%;
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
}



</style>

<div class="row">
  <div class="col-lg-10">
    <div class="card shadow" id="DashboardCard">
        <h4 id="DashboardText" class="text-light" style="position: absolute;">Good Day, Nurse {{ Auth::user()->firstname . " " . Auth::user()->lastname }}<br><br>
        <p style="font-size:15px;">Today, you are assigned to <b>{{ $assigned_station->station }}</b><br>
        Have a nice day at work!</p>
        </h4>
    <!-- Nurse Dashboard img -->
    <div style="text-align:right;">
        <img id="DashboardNurseImg" src="{{ asset('images/nursedashboard.png') }}" alt="Image">
    </div>
</div>

    <div class="row">
    <div class="col-lg-12">
      <div class="card rounded shadow mt-2 p-4">
      <table class="table p-4" id="nursesDashboardTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Kardex</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td>Jan 2,2022</td>
                    <td>Sample Name</td>
                    <td>A01</td>
                    <td><a href="#">🗒</a></td>
                    <td>Remarks</td>
                </tr>
            </tbody>
           </table>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2" id="DashboardSide">
    <!-- Side Profile -->
    <div style="padding:15%; height:530px; background: linear-gradient(180deg, rgba(66, 100, 208, 0.7) 0%, #4264D0 100%);border-radius: 30px 30px 0px 0px;">
        <center>
          <img class="mb-2" src="{{ asset('images/nurseprofile.png') }}" alt="Image" style="width: 100%; height: 30%;">
          <p style="font-size:17px; font-weight:600;" class="text-light">Nurse {{ Auth::user()->firstname . " " . Auth::user()->lastname }}</p>
          <p style="font-size:14px; font-weight:600;" class="text-light">{{ $specialization->name }}</p>
        </center>
    </div>
     <!--END Side Profile -->

    <!-- Side Time/Date -->
    <div class="mt-2 p-2 text-light" style="height:100px;background: linear-gradient(180deg, rgba(66, 100, 208, 0.7) 0%, #4264D0 100%);border-radius: 0px 0px 30px 30px;">
    <center>
        <h6 id="currentDate"></h6>
        <h2 id="currentTime"></h2>
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
