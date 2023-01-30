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
              <strong class="fs-4">{{ Auth::user()->name }}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" data-popper-placement="static">
              <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>

          <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item mt-3">
                <a href="{{ route('adminHome') }}" class="nav-link active mt-3">
                  <i class="fa-sharp fa-solid fa-house-chimney fs-1 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="{{ route('patientView') }}" class="nav-link mt-3">
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

      <main class="col px-3 mt-4 flex-grow-1">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active fw-bold fs-4" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Patients</button>
            <button class="nav-link fw-bold fs-4" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Add Patient</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <main class="col px-0 flex-grow-1">
              <div class="row ms-3">
                <div class="col-4">
                  <form class="form-inline">
                    <input class="form-control border-dark mt-3" type="search" placeholder="Search patient" aria-label="Search">
                  </form>
                </div>
              </div>

              <div class="card rounded shadow mt-4 ms-3 me-2">
                <div class="card-body formBackground">
                  <table class="table table-hover">
                  <p class="fw-bold fs-5">ALL PATIENTS</p>
                    <thead>
                      <tr>
                        <th scope="col">ID #</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Room #</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Maria Clara</td>
                        <td>003</td>
                        <td><span class="badge rounded-pill text-bg-success">Active</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="container py-3">
              @if( session('success'))
              <div class="alert alert-primary">{{ session('success') }}</div>
              @endif
              <!-- Patients Form -->
              <div class="col-md formBackground rounded p-4 rounded shadow">
                <form class="row g-2" method="POST" action="{{ route('createpatient') }}">
                  @csrf
                  <p class="fw-bold fs-5">ADD PATIENT</p>
                  <div class="col-md-4">
                    <input type="text" class="form-control border-dark" id="lastname" placeholder="Last Name" name="lastname" required>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control border-dark" id="firstname" placeholder="First Name" name="firstname" required>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control border-dark" id="midname" placeholder="Middle Name" name="midname" required>
                  </div>
                  <div class="col-md-2">
                    <select id="marital_status" class="form-select border-dark" name="marital_status" required>
                      <option selected>Marital Status</option>
                      <option>Single</option>
                      <option>Married</option>
                      <option>Widowed</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <input type="date" class="form-control border-dark" id="birth_date" placeholder="Birth Date" name="birth_date" required>
                  </div>
                  <div class="col-md-2">
                    <select id="gender" class="form-select border-dark" name="gender" required>
                      <option selected>Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <select id="blood_type" class="form-select border-dark" name="blood_type" required>
                      <option selected>Blood Type</option>
                      <option>A</option>
                      <option>B</option>
                      <option>AB</option>
                      <option>O</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control border-dark" id="address" placeholder="Address" name="address" required>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control border-dark" id="phone" placeholder="Phone Number" name="phone" required>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control border-dark" id="health_insurance" placeholder="Health Insurance" name="health_insurance" required>
                  </div>
                  <br>
                  <hr>
                  <div class="col-md-4">
                    <input type="text" class="form-control border-dark" id="relative_fullname" placeholder="Relative Full Name" name="relative_fullname" required>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control border-dark" id="relation" placeholder="Relation to patient" name="relation" required>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control border-dark" id="relative_phone" placeholder="Relative Phone Number" name="relative_phone" required>
                  </div>
                  <span>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                  </span>
                </form>
              </div>


            </div>
          </div>

        </div>
      </main>
    </div>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>