<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">
</head>

<body>
  <!--Side Bar-->
  <div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
      <aside class="col-12 col-md-3 col-xl-2 p-0 flex-shrink-1">
        <nav class="navbar navbar-expand-md navbar-primary bd-primary flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">
          <div class="text-center p-3">
            <img class="logo-sidebar mb-2" src="{{asset('/images/medboard-logo-final.png')}}">
            <a href="#" class="navbar-brand mx-0 text-nowrap fs-2 fw-bold">MedBoard</a>
          </div>

          <div class="dropdown d-flex justify-content-end">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
              <strong class="fs-4">ADMIN</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" data-popper-placement="static">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>

          <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item mt-3">
                <a href="#" class="nav-link active mt-3">
                  <i class="fa-sharp fa-solid fa-house-chimney fs-1 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-sharp fa-solid fa-bed-pulse fs-1 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-solid fa-calendar-days fs-1 text-white ms-1"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-sharp fa-solid fa-gear fs-1 text-white"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </aside>

      <main class="col px-0 flex-grow-1">
        <div class="container py-3">
          <h5 class="ms-2 mt-3 mb-4 text-primary fs-2">Patient Form</h5>
          <!-- Patients Form -->
          <div class="col-mdrounded border border-dark p-4 rounded shadow">
            <form class="row g-2" method="" action="">
              @csrf
              <div class="col-md-4">
                <input type="text" class="form-control border-dark" id="lastname" placeholder="Last Name">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control border-dark" id="firstname" placeholder="First Name">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control border-dark" id="midname" placeholder="Middle Name">
              </div>
              <div class="col-md-2">
                <select id="maritalstatus" class="form-select border-dark">
                  <option selected>Marital Status</option>
                  <option>Single</option>
                  <option>Married</option>
                  <option>Widowed</option>
                </select>
              </div>
              <div class="col-md-2">
                <input type="date" class="form-control border-dark" id="birthdate" placeholder="Birth Date">
              </div>
              <div class="col-md-2">
                <select id="gender" class="form-select border-dark">
                  <option selected>Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="col-md-2">
                <select id="gender" class="form-select border-dark">
                  <option selected>Blood Type</option>
                  <option>A</option>
                  <option>B</option>
                  <option>AB</option>
                  <option>O</option>
                </select>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control border-dark" id="address" placeholder="Address">
              </div>
              
            </form>
          </div>
      </main>

    </div>
  </div>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>