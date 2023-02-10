@include('profile.partials.header', ['title' => 'MedBoard - Admin'])

<!-- Navbar Starts -->
<div id="page-content-wrapper">
  <div class="container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-3">
      <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-2 me-3" id="menu-toggle"></i>
        <!-- <h2 class="fs-1 m-0 ms-3">Admin Dashboard</h2> -->
        <h5 class="fw-bold">{{ __('Hi,') }} {{ Auth::user()->name }} &nbsp;<span class="badge text-bg-primary">{{ Auth::user()->usertype }}</span></h5>
        <div><p class="text-center">{{ date('F j, Y') }}</p></div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item-dropdown">
            <a href="#" class="nav-link second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <i class="fas fa-user fs-2 me-2"></i>               -->
              @if(Auth::user()->imagepath != NULL)
                <img src="{{ Storage::url('public/images/profile/'.Auth::user()->imagepath) }}" class="img-fluid rounded-pill" style="width: 50px; height: 50px; object-fit:cover;">
              @endif
              <!-- My Profile -->
              {{ Auth::user()->name }}
            </a>            
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Navbar Ends -->

  <div class="container-fluid px-4">
    <div class="row g-3 my-2">

      <div class="col-md-3">
        <div class="card card-body card-bg p-3 text-center border shadow rounded-3">
          <h3 class="fw-bold second-text">{{ $totalPatients }}</h3>
          <p class="fs-5 text-primary">Total Patients</p>
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
          <i class="fs-1 fa-solid fa-user-nurse primary-text pb-2"></i>
        </div>
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

@include('profile.partials.footer')