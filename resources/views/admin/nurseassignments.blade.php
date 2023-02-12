@extends('layouts.adminlayout', ['title' => 'Admin-Nurse Assignment'])

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-3">
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <div class="flex-grow-1">
      <h4 class="fw-bold text-secondary f-poppins">NURSE ASSIGNMENT</h4>
    </div>
    @if (Route::has('register'))
    <button type="button" class="btn btn-primary flex-end" data-bs-toggle="modal" data-bs-target="#createNurseAssignmentModal">+ New Nurse Assignment</button>
    @endif
  </div>

  @if( session('success') )
  <div class="alert alert-success my-3" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="my-3">
    <table class="table table-hover responsive" id="nurseAssignmentTable">
      <thead class="third-bg-color">
        <tr>
          <td>Assignment ID</td>
          <td>User ID</td>
          <td>Date Time Start</td>
          <td>Date Time End</td>
          <td>Shift</td>
          <td>Station</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @if(count($nurseassignments) > 0)
        @foreach($nurseassignments as $nurseassignment)
        <tr>
          <td>{{ $nurseassignment->id }}</td>
          <td>{{ $nurseassignment->user_id }}</td>
          <td>{{ $nurseassignment->datetime_start }}</td>
          <td>{{ $nurseassignment->datetime_end }}</td>
          <td>{{ $nurseassignment->shift }}</td>
          <td>{{ $nurseassignment->station }}</td>
          <td>
            <a class="btn btn-sm" href="#">🖊️</a>
            <a class="btn btn-sm" href="#">❌</a>
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

  <!-- Create Nurse Assignment Modal -->
  <div class="modal modal-lg fade" id="createNurseAssignmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Nurse Assignment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('storenurseassignment') }}">
              @csrf

              <!-- User ID -->
              <div class="row mb-3">
                <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User ID') }}</label>

                <div class="col-md-6">
                  <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="lastname" autofocus>

                  @error('user_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Date Time Start -->
              <div class="row mb-3">
                <label for="datetime_start" class="col-md-4 col-form-label text-md-end">{{ __('Date Time Start') }}</label>

                <div class="col-md-6">
                  <input id="datetime_start" type="datetime-local" class="form-control @error('datetime_start') is-invalid @enderror" name="datetime_start" value="{{ old('datetime_start') }}" required autocomplete="datetime_start" autofocus>

                  @error('datetime_start')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Date Time End -->
              <div class="row mb-3">
                <label for="datetime_end" class="col-md-4 col-form-label text-md-end">{{ __('Date Time End') }}</label>

                <div class="col-md-6">
                  <input id="datetime_end" type="datetime-local" class="form-control @error('datetime_end') is-invalid @enderror" name="datetime_end" value="{{ old('datetime_end') }}" required autocomplete="datetime_end" autofocus>

                  @error('datetime_end')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Shift -->
              <div class="row mb-3">
                <label for="shift" class="col-md-4 col-form-label text-md-end">Shift</label>

                <div class="col-md-6">
                  <select class="form-select" aria-label="Select gender" name="shift" id="shift" required>
                    <option value=0 selected>Select ---</option>
                    <option value="AM Shift">AM Shift</option>
                    <option value="PM Shift">PM Shift</option>
                    <option value="Night Shift">Night Shift</option>
                  </select>
                  @error('shift')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Station -->
              <div class="row mb-3">
                <label for="station" class="col-md-4 col-form-label text-md-end">Station</label>

                <div class="col-md-6">
                  <select class="form-select" aria-label="Select station" name="station" id="station" required>
                    <option value=0 selected>Select ---</option>
                    <option value="Nurse Station 1">Nurse Station 1</option>
                    <option value="Nurse Station 2">Nurse Station 2</option>
                    <option value="Nurse Station 3">Nurse Station 3</option>
                  </select>
                  @error('station')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- For DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/fc-4.2.1/r-2.4.0/rr-1.3.2/sc-2.1.0/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/fc-4.2.1/r-2.4.0/rr-1.3.2/sc-2.1.0/datatables.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#nurseAssignmentTable').DataTable({
        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        responsive: true,
        pageLength: 10,
        lengthChange: true
      });
    });
  </script>

  @endsection