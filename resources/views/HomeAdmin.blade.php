@include('profile.partials.header', ['title' => 'MedBoard - Admin'])

  <div class="container-fluid px-4">
    <div class="row g-3 my-2">

      <div class="col-md-3">
        <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
          <div>
            <h3 class="fs-1 fw-bold second-text">35</h3>
            <p class="fs-3 text-primary">Total Patients</p>
          </div>
          <i class="fa-solid fa-hospital-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
          <div>
            <h3 class="fs-1 fw-bold second-text">2</h3>
            <p class="fs-3 text-primary">Total Doctors</p>
          </div>
          <i class="fa-solid fa-user-doctor fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
          <div>
            <h3 class="fs-1 fw-bold second-text">8</h3>
            <p class="fs-3 text-primary">Total Nurses</p>
          </div>
          <i class="fa-solid fa-user-nurse fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
          <div>
            <h3 class="fs-1 fw-bold second-text">5</h3>
            <p class="fs-3 text-primary">Rooms Available</p>
          </div>
          <i class="fa-solid fa-user-nurse fs-1 primary-text border rounded-full secondary-bg p-3"></i>
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