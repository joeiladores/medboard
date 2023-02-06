@include('profile.partials.header', ['title' => 'MedBoard - Admin'])

  <div class="container-fluid px-4">
    <div class="row g-3 my-2">

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-pill">
         
            <h3 class="fs-1 fw-bold second-text">{{ $totalPatients }}</h3>
            <p class="fs-3 text-primary">Total Patients</p>
          
          <i class="fa-solid fa-hospital-user fs-1 primary-text p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-pill">
          
            <h3 class="fs-1 fw-bold second-text">{{ $totalDoctors }}</h3>
            <p class="fs-3 text-primary">Total Doctors</p>
         
          <i class="fa-solid fa-user-doctor fs-1 primary-text p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-pill">
          
            <h3 class="fs-1 fw-bold second-text">{{ $totalNurses }}</h3>
            <p class="fs-3 text-primary">Total Nurses</p>
          
          <i class="fa-solid fa-user-nurse fs-1 primary-text p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-pill">
           
            <h3 class="fs-1 fw-bold second-text">-</h3>
            <p class="fs-3 text-primary">Rooms Available</p>
           
          <i class="fa-solid fa-user-nurse fs-1 primary-text p-3"></i>
        </div>
      </div>

    </div>

    <div class="graphBox">
      <!-- Charts Starts-->

      <div class="box border shadow">
        <canvas id="patientBar"></canvas>
      </div>

      <div class="box border shadow">
        <canvas id="patientChart"></canvas>
      </div>


      <!-- Charts Ends -->

    </div>

  </div>

</div>

</div>

@include('profile.partials.footer')