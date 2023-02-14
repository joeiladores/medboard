@include('profile.partials.header', ['title' => 'MedBoard - Admin'])

   <div class="container-fluid px-4">
    <div class="row g-3 mt-1 mb-2">

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalPatients }}</h3>
          <p class="fs-5 text-primary">Total Current Patients</p>
          <i class="fs-1 fa-solid fa-hospital-user primary-text pb-2"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalDoctors }}</h3>
          <p class="fs-5 text-primary">Total Doctors</p>
          <i class="fs-1 fa-solid fa-user-doctor primary-text pb-2"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalNurses }}</h3>
          <p class="fs-5 text-primary">Total Nurses</p>
          <i class="fs-1 fa-solid fa-user-nurse primary-text pb-2"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalVacantBeds }}</h3>
          <p class="fs-5 text-primary">Beds Available</p>

          <i class="fs-1 fa-solid fa-bed primary-text pb-2"></i>          

        </div>
      </div>

    </div>
  </div>

  <!-- Charts Starts-->

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <canvas id="myChart"></canvas>
      </div>
      <div class="col-md-6">
        <canvas id="myPieChart"></canvas>
      </div>
    </div>
  </div>

  

  <div class="graphBox">    

    <div class="box border shadow">
      <canvas id="patientBar"></canvas>
    </div>

    <div class="box border shadow">
      <canvas id="patientChart"></canvas>
    </div>
    
  </div>
  <!-- Charts Ends -->



  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- ChartJs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

  <script src="{{asset('/chart.js')}}"></script>
<!-- fot test purpose -->
  <script>
    var totalSample = @json($totalSample);
  </script>


@include('profile.partials.footer')