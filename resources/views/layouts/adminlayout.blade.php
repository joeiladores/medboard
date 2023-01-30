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

  <!-- Datatable CSS -->  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <!-- Datatable Responsive CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
  

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
                <a href="{{ route('users') }}" class="nav-link text-white">
                  <i class="fa-solid fa-user-doctor fs-3 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="#" class="nav-link mt-3">
                  <i class="fa-sharp fa-solid fa-bed-pulse fs-3 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="{{ route('beds') }}" class="nav-link text-white">
                  <i class="">Bed Management</i>
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
                  <div class="pt-2 d-inline-flex">
                    <h5 class="fw-bold">{{ __('Hi,') }} {{ Auth::user()->name }} &nbsp;<span class="badge text-bg-primary">{{ Auth::user()->usertype }}</span></h5>
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

        <!-- Create User Modal -->
        <div class="modal modal-lg fade" id="createUserModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card py-3 px-4 border-0">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <!-- User Type -->
                    <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select user type" name="usertype" id="usertype" required>
                                    <option value=0 selected>Select ---</option> 
                                    <option value="Admin">{{ __('Admin') }}</option>
                                    <option value="Doctor">{{ __('Doctor') }}</option>
                                    <option value="Nurse">{{ __('Nurse') }}</option>
                                    <option value="Chief Nurse">{{ __('Chief Nurse') }}</option>
                                </select>
                                @error('usertype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Middle Name -->
                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select gender" name="gender" id="gender" required>
                                    <option selected>Select ---</option> 
                                    <option value="Male">{{ __('Male') }}</option>
                                    <option value="Female">{{ __('Female') }}</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Department -->
                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select gender" name="department" id="department" required>
                                    <option value=0 selected>Select ---</option> 
                                    <option value=0>Doctors ----------</option> 
                                    <option value="Emergency Department">{{ __('Emergency Department') }}</option>
                                    <option value="Intensive Care Unit (ICU)">{{ __('Intensive Care Unit (ICU)') }}</option>
                                    <option value="Obstetrics and Gynecology (OB/GYN)">{{ __('Obstetrics and Gynecology (OB/GYN)') }}</option>
                                    <option value="Pediatrics">{{ __('Pediatrics') }}</option>
                                    <option value="Surgery">{{ __('Surgery') }}</option>
                                    <option value="Cardiology">{{ __('Cardiology') }}</option>
                                    <option value="Orthopedics">{{ __('Orthopedics') }}</option>\
                                    <option value=0>{{ __('Nurses ----------') }}</option>
                                    <option value="Nursing Department">{{ __('Nursing Department') }}</option>
                                    <option value=0>{{ __('Admin ----------') }}</option>
                                    <option value="IT Department">{{ __('IT Department') }}</option>
                                    <option value="Admission">{{ __('Admission') }}</option>
                                </select>
                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Specialization -->
                        <div class="row mb-3">
                            <label for="specialization" class="col-md-4 col-form-label text-md-end">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select gender" name="specialization" id="specialization" required>
                                    <option value=0 selected>Select ---</option> 
                                    <option value=0>Doctors ----------</option> 
                                    <option value="Internal Medicine">{{ __('Internal Medicine') }}</option>
                                    <option value="Surgeon">{{ __('Surgeon') }}</option>
                                    <option value="Pediatrician">{{ __('Pediatrician') }}</option>
                                    <option value="Ob-gyne">{{ __('Ob-gyne') }}</option>
                                    <option value="Orthopedic">{{ __('Orthopedic') }}</option>
                                    <option value="Cardiologist">{{ __('Cardiologist') }}</option>
                                    <option value="Orthopedics">{{ __('Orthopedics') }}</option>
                                    <option value="Neurologist">{{ __('Neurologist') }}</option>
                                    <option value=0>Nurses ----------</option> 
                                    <option value="Registered Nurse">{{ __('Registered Nurse') }}</option>
                                    <option value="ICU Nurse">{{ __('ICU Nurse') }}</option>
                                    <option value="ER Nurse">{{ __('ER Nurse') }}</option>
                                    <option value="Geriatic Nurse">{{ __('Geriatic Nurse') }}</option>
                                    <option value="Orthopedic Nurse">{{ __('Orthopedic Nurse') }}</option>
                                    <option value=0>{{ __('Admin -----------') }}</option>
                                    <option value="Software Developer">{{ __('Software Developer') }}</option>
                                    <option value="Admission Officer">{{ __('Admission Officer') }}</option>
                                </select>
                                @error('specialization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Path -->
                        <div class="row mb-3">
                            <label for="imagepath" class="col-md-4 col-form-label text-md-end">{{ __('Upload Image File') }}</label>

                            <div class="col-md-6">
                                <input id="imagepath" type="file" class="form-control @error('imagepath') is-invalid @enderror" name="imagepath" value="{{ old('imagepath') }}" autocomplete="imagepath" autofocus>

                                @error('imagepath')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </main>

    </div>
  </div>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <!-- Datatable JS -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <!-- Datatable Responsive JS -->
  <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

</body>

</html>