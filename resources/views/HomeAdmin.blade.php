@include('profile.partials.header', ['title' => 'MedBoard - Admin'])

  <div class="container-fluid px-4">
    <div class="row g-3 my-2">

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
            <h3 class="fw-bold second-text">{{ $totalPatients }}</h3>
            <p class="fs-5 text-primary">Total Patients</p>
            <i class="fs-1 fa-solid fa-hospital-user primary-text pb-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
            <h3 class="fw-bold second-text">{{ $totalDoctors }}</h3>
            <p class="fs-5 text-primary">Total Doctors</p>
            <i class="fs-1 fa-solid fa-user-doctor primary-text pb-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
            <h3 class="fw-bold second-text">{{ $totalNurses }}</h3>
            <p class="fs-5 text-primary">Total Nurses</p>
            <i class="fs-1 fa-solid fa-user-nurse primary-text pb-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalVacantBeds }}</h3>
          <p class="fs-5 text-primary">Beds Available</p>
          <i class="fs-1 fa-solid fa-user-nurse primary-text pb-3"></i>
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