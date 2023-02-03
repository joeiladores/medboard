@include('profile.partials.header', ['title' => 'MedBoard - Admin'])


<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
      <i class="fas fa-align-left primary-text fs-2 me-3" id="menu-toggle"></i>
      <h2 class="fs-2 m-0 ms-3">Welcome ( USER )</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item-dropdown">
          <a href="#" class="nav-link second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user fs-2 me-2"></i>
            My Profile
          </a>
          <p>Tuesday, Feb 14, 2023</p>

        </li>
      </ul>
    </div>

  </nav>

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
            <p class="fs-3 text-primary">Doctors Available</p>
          </div>
          <i class="fa-solid fa-user-doctor fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
          <div>
            <h3 class="fs-1 fw-bold second-text">8</h3>
            <p class="fs-3 text-primary">Nurse Available</p>
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