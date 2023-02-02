<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedBoard - Patients</title>
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar Starts -->
    <div class="sidebar" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <img class="logo-sidebar" src="{{asset('/images/medboard-logo-final.png')}}">
        <p>MEDBOARD</p>
      </div>

      <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center">
          <i class="fa-sharp fa-solid fa-house-chimney fs-2 me-2"></i>
          Home
        </a>
        <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center">
          <i class="fa-sharp fa-solid fa-bed-pulse fs-2 me-2"></i>
          Patients
        </a>
        <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center">
          <i class="fa-solid fa-calendar-days fs-2 me-2"></i>
          Calendar
        </a>
        <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center">
          <i class="fa-sharp fa-solid fa-gear fs-2 me-2"></i>
          Settings
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center mt-5">
          <i class="fas fa-project-diagram fs-2 me-2"></i>
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </div>

    <!-- Sidebar Ends -->

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

          <div class="col-md-4">
            <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
              <div>
                <h3 class="fs-1 fw-bold second-text">35</h3>
                <p class="fs-3 text-primary">Total Patients</p>
              </div>
              <i class="fa-solid fa-hospital-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
              <div>
                <h3 class="fs-1 fw-bold second-text">2</h3>
                <p class="fs-3 text-primary">Doctor's In</p>
              </div>
              <i class="fa-solid fa-user-doctor fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 bg-white border shadow d-flex justify-content-around align-items-center rounded">
              <div>
                <h3 class="fs-1 fw-bold second-text">8</h3>
                <p class="fs-3 text-primary">Nurse Available</p>
              </div>
              <i class="fa-solid fa-user-nurse fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
          </div>

        </div>

        <div class="row my-5 graphBox">
          <!-- Charts Starts-->

          <div class="col-md-6 box border shadow">
            <canvas id="myChart"></canvas>
          </div>

          <div class="col-md-6 box border shadow">

          </div>


          <!-- Charts Ends -->

        </div>

      </div>

    </div>

  </div>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
  <script src="/chart.js"></script>

  <script>
    var el = document.getElementById("wrapper")
    var toggleButton = document.getElementById("menu-toggle")

    toggleButton.onclick = function() {
      el.classList.toggle("toggled")
    }
  </script>

  <!-- For DataTables -->
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
  </script>

  <script>
    var dataTable = new DataTable("#medicationTable");
    var dataTable = new DataTable("#transfusionTable");
    var dataTable = new DataTable("#treatmentTable");


    function openPage(pageName, elmnt, color) {
      // Hide all elements with class="tabcontent" by default */
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Remove the background color of all tablinks/buttons
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }

      // Show the specific tab content
      document.getElementById(pageName).style.display = "block";

      // Add the specific color to the button used to open the tab content
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>