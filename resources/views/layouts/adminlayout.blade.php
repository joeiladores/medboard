<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Poppins&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      font-size: small;
      /* font-family: 'Montserrat', sans-serif; */
      /* font-family: 'Poppins', sans-serif; */
    }
  </style>
</head>

<body>

  <div class="container-fluid m-0">
    <div class="row min-vh-100 flex-column flex-md-row">

      <!--Side Bar-->
      <aside class="col-md-3 col-xl-2 p-0 flex-shrink-1">
        <nav class="navbar navbar-expand-md navbar-primary bd-primary flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">

          <!-- Project Logo -->
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

          <!-- Burger Menu Toggle -->
          <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Logo Menus -->
          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item mt-3">
                <a href="{{ route('home') }}" class="nav-link active mt-3">
                  <i class="fa-sharp fa-solid fa-house-chimney fs-3 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="{{ route('user') }}" class="nav-link text-white">
                  <i class="fa-solid fa-user-doctor fs-3 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-sharp fa-solid fa-bed-pulse fs-3 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-solid fa-calendar-days fs-3 text-white ms-1"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-sharp fa-solid fa-gear fs-3 text-white"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </aside>

      <main class="col p-0 m-0">
        <!-- Header -->
        <div class="container-fluid m-0 p-0">
          <div class="row justify-content-center">
            <div class="col">
              <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
                <div class="card-header">
                  <div class="d-flex">{{ __('Dashboard') }} &nbsp;<span class="badge text-bg-primary">{{ Auth::user()->usertype }}</span></div>
                  <div class="pt-2 d-inline-flex">
                    <h5 class="fw-bold">{{ __('Hi,') }} {{ Auth::user()->name }} </h5>
                  </div>
                  <div class="">
                    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                      class="btn btn-light btn-sm">← Logout</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
        </div>

        @yield('content')
        
      </main>

    </div>
  </div>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>