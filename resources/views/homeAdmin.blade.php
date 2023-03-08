@extends('layouts.adminlayout', ['title' => 'Admin-Beds'])

@section('head')

<!-- ChartJs -->
<script src=" https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js "></script>

@endsection



@section('content')
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
<div class="graphBox">

  <div class="box border shadow">
    <canvas id="patientAdmissionBar"></canvas>
  </div>

  <div class="box border shadow">
    <canvas id="patientChart"></canvas>
  </div>

</div>
<!-- Charts Ends -->
@endsection


@section('script')

<script>
  let ctx = document.getElementById('patientAdmissionBar').getContext('2d');
  let chartData = @json($chartData);

  let chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: chartData.months,
      datasets: [{
        label: 'Admissions',
        data: chartData.count,
        backgroundColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(0, 209, 115,1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
</script>


@endsection