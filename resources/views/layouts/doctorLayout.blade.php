<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedBoard - Doctor Dashboard</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="/images/medboard-logo.png">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar Starts -->
    <div class="sidebar" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom">
        <img class="logo-sidebar" src="{{asset('/images/medboard-logo-final.png')}}">
        <p class="fw-bold fs-4">MedBoard</p>
      </div>

      <div class="list-group list-group-flush my-3 ps-4">
        <a href="{{ route('doctorHome') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-3">
          <i class="fa-sharp fa-solid fa-house-chimney fa-icon fs-3"></i>
          <span class="fs-5 ms-2">Home</span>
        </a>
        <a href="{{ route('doctorsOrders') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-3">
                    <i class="fa-sharp fa-solid fa-clipboard fa-icon fs-3"></i>
                    <span class="fs-5 ms-2">Orders</span> 
                </a>
        <a href="{{ route('patientView') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-3">
          <i class="fa-sharp fa-solid fa-bed-pulse fa-icon fs-3"></i>
          <span class="fs-5 ms-2">Patients</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-3">
          <i class="fa-solid fa-calendar-days fa-icon fs-3"></i>
          <span class="fs-5 ms-2">Admitted</span>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-5 pt-5">
          <i class="fas fa-project-diagram fa-icon fs-3"></i>
          <span class="fs-5 ms-2">{{ __('Logout') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </div>
    <!-- Sidebar Ends -->

    <!-- Navbar Starts -->
    <div id="page-content-wrapper">
      <div class="container-fluid" style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2)">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-3 sticky-top">

          <!-- Header -->
          <div class="d-flex">
            <!-- Sidebar Toggler -->
            <div class="row">
              <div class="col-md-3 col-2 align-self-center">
                <i class="fas fa-align-left primary-text fs-2 me-3" id="menu-toggle"></i>
              </div>
              <div class="col align-self-center">
                <!-- Welcome User -->
                <div class="fs-6 fw-bold">{{ __('Hi,') }} {{ Auth::user()->name }}</div>
                <div>{{ \Carbon\Carbon::now(new DateTimeZone('Asia/Singapore'))->format('D, F j, Y') }}</div>
              </div>
            </div>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
          </div>

          <!-- Toggler Button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Profile Photo and User -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item-dropdown">
                <a href="#" class="nav-link second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="d-flex">
                    <!-- Photo -->
                    <div class="flex-grow-1 align-self-center">
                      @if(Auth::user()->imagepath != NULL)
                      <img src="{{ Storage::url('public/images/profile/'.Auth::user()->imagepath) }}" class="img-fluid rounded-pill" style="width: 50px; height: 50px; object-fit:cover;">
                      @else
                      <i class="fas fa-user fs-2 me-1"></i>
                      @endif
                    </div>
                    <!-- My Profile -->
                    <div class="ms-2 align-self-center">
                      <div>{{ Auth::user()->name }} </div>
                      <div class="text-secondary">{{ ucfirst(Auth::user()->usertype) }}</div>

                    </div>

                  </div>

                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Navbar Ends -->


    <!-- Doctors Dashboard -->
      @yield('content')



    </div>
  </div>

  <script>
    var el = document.getElementById("wrapper")
    var toggleButton = document.getElementById("menu-toggle")

    toggleButton.onclick = function() {
      el.classList.toggle("toggled")
    }
  </script>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
  <script src="/chart.js"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- For DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.js"></script>


</body>

</html>