@extends('layouts.adminlayout')

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-3">
  <h1 class="fw-bold">Users</h1>
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <h5 class="flex-grow-1">List of Users</h5>

    @if (Route::has('register'))
    <p><a href="{{ route('registeruser') }}" class="btn btn-primary me-3">+ Add New User</a></p>
    <!-- <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#createUserModal">+ New User</button> -->
    <a href="{{ route('generate-userlistpdf') }}" target="_blank" class="btn btn-warning">⬇ Download PDF</a>
    @endif
  </div>

  @if( session('success') )
  <div class="alert alert-success my-3" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive my-3">
    <table class="table table-hover" id="userTable">
      <thead class="fw-bold">
        <tr>
          <td>User ID</td>
          <td>User Type</td>
          <td>Name</td>
          <td>Department</td>
          <td>Specialization</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @if(count($users) > 0)
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->usertype }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->department }}</td>
          <td>{{ $user->specialization }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>
            <a class="btn btn-sm" href="{{ route('edituser', $user->id) }}">🖊️</a>
            <!-- <a class="btn btn-sm" href="#">❌</a> -->
            <!-- <button type="button" class="btn btn-sm" onclick="showEditUserModal({{ $user->id }});">🖊️</button>        -->
              <a class="btn btn-sm" href="{{ route('deleteuser', $user->id) }}">❌</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="5" class="p-3 text-center">There are no users yet in the database.</td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>

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
            <form method="POST" action="{{ route('storeuser') }}">
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

@endsection