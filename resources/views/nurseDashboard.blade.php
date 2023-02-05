@extends('layouts.orders')

@section('content')
<style>
body {
  height: 100%;
  margin: 0;
  /* font-family: Arial; */
  /* overflow-x: hidden;
  overflow-y: hidden; */
}

</style>

<div class="row">
  <div class="col-lg-10">
  <div class="card shadow" style="height:35%; background: linear-gradient(180deg, rgba(66, 100, 208, 0.7) 0%, #4264D0 100%);border-radius:30px;">
  <h4 class="text-light p-5" style="position: absolute;">Good Day, Nurse "Name here"<br><br>
  <p style="font-size:15px;">Today, you are assigned to station "station here"<br>
  Have a nice day at work!</p>
</h4>
  
<div style="text-align:right;">
    <img src="{{ asset('images/nursedashboard.png') }}" alt="Image" style="width: 30%; height: 100%; margin: 2px;">
  </div>
</div>


    <div class="row">
    <div class="col-lg-12">
      <div class="card rounded shadow mt-3 p-2">
      <table class="table" id="nursesDashboardTable">
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
  <div class="col-lg-2">
    <div style="padding:20%; height:500px; background: linear-gradient(180deg, #4264D0 0%, rgba(66, 100, 208, 0.84532) 18.86%, rgba(66, 100, 208, 0.32) 100%);box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);border-radius: 30px 30px 0px 0px;">
        <img src="{{ asset('images/nurseprofile.png') }}" alt="Image" style="width: 100%; height: 30%;">
    </div>
    <div class="mt-2 p-2 text-light" style="height:100px;background: linear-gradient(180.37deg, rgba(66, 100, 208, 0.06) -19.51%, #4264D0 99.68%);box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);border-radius: 0px 0px 30px 30px;">
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
        "pageLength": 6,
        "lengthChange": false
    });
} );  


</script>




<!-- For Sweet Alert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
 <!-- For Font Awesome -->
 <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">

 

 <!-- Bootstrap 5-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@endsection
