@extends('layouts.adminlayout', ['title' => 'Admin-Nurse Assignment'])

@section('content')

  <!-- Main Content - List of Users -->
  <div class="container p-4">
    <div class="row pb-2">
      <div class="col">
        <h3 class="fw-bold text-secondary f-poppins">NURSE ASSIGNMENT</h3>
      </div>
      <div class="col d-flex flex-grow-1 justify-content-end">
        @if (Route::has('register'))
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createNurseAssignmentModal">+ New Nurse Assignment</button>
        @endif
      </div>
    </div>
  </div>

  <div class="container px-4">
    @if( session('success') )
    <div class="alert alert-success my-3" role="alert">
      {{ session('success') }}
    </div>
    @endif
    @if( session('error') )
    <div class="alert alert-danger my-3" role="alert">
      {{ session('error') }}
    </div>
    @endif
  </div>

  <div class="container px-4">
    <div class="row">
      <div class="col-md-12">
        <table id="nurseAssignmentTable" class="table table-hover  display nowrap" cellspacing="0" width="100%">
          <thead class="primary-bg text-light">
            <tr>
              <td>ID</td>
              <td>User ID</td>
              <td>Name</td>
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
              <td>{{ $nurseassignment->user->lastname }}, {{ $nurseassignment->user->firstname }}</td>
              <td>{{ $nurseassignment->datetime_start }}</td>
              <td>{{ $nurseassignment->datetime_end }}</td>
              <td>{{ $nurseassignment->shift }}</td>
              <td>{{ $nurseassignment->station }}</td>
              <td>
                <button type="button" class="btn btn-sm" onclick="showEditNurseAssignmentModal({{ $nurseassignment->id }});">🖊️</button>
                <a class="btn btn-sm" href="{{ route('deletenurseassignment', $nurseassignment->id) }}">❌</a>
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
    </div>    
  </div>

  <!-- Create Nurse Assignment Modal -->
  <div class="modal modal-lg fade" id="createNurseAssignmentModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header primary-bg text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Nurse Assignment</h1>
          <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('storenurseassignment') }}">
              @csrf

              <!-- Nurse Dropdown -->
              <div class="row mb-3">
                <label for="nurse_id" class="col-md-4 col-form-label text-md-end">{{ ('Nurse') }}</label>

                <div class="col-md-6">
                  <select id="nurse_id" aria-label="Select nurse" class="form-select" name="nurse_id" required autocomplete="nurse_id" autofocus>
                    <option value=0 selected>Select ---</option>
                    @foreach($nurses as $nurse)
                      <option value={{ $nurse->id }}>{{ $nurse->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <!-- Date Time Start -->
              <div class="row mb-3">
                <label for="datetime_start" class="col-md-4 col-form-label text-md-end">{{ __('Date Time Start') }}</label>

                <div class="col-md-6">
                  <input id="datetime_start" type="datetime-local" class="form-control" name="datetime_start" required>
                </div>
              </div>

              <!-- Date Time End -->
              <div class="row mb-3">
                <label for="datetime_end" class="col-md-4 col-form-label text-md-end">{{ __('Date Time End') }}</label>

                <div class="col-md-6">
                  <input id="datetime_end" type="datetime-local" class="form-control" name="datetime_end" required>
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
                </div>
              </div>
              <div>
                <input type="hidden" name="id" id="_id">
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

  <!-- Edit Nurse Assignment Modal -->
  <div class="modal modal-lg fade" id="editNurseAssignmentModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header primary-bg text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Nurse Assignment</h1>
          <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('updatenurseassignment') }}">
              @csrf

              <!-- Nurse -->
              <div class="row mb-3"">
                <label for="edit_nurse_id" class="col-md-4 col-form-label text-md-end">Name</label>
                <div class="col-md-6">
                  <input type="text" class="form-control bg-light" name="nurse_id" id="edit_nurse_id" required readonly>     
                </div>                         
              </div>

              <!-- Date Time Start -->
              <div class="row mb-3">
                <label for="edit_datetime_start" class="col-md-4 col-form-label text-md-end">{{ __('Date Time Start') }}</label>

                <div class="col-md-6">
                  <input id="edit_datetime_start" type="datetime-local" class="form-control" name="datetime_start" required>
                </div>
              </div>

              <!-- Date Time End -->
              <div class="row mb-3">
                <label for="edit_datetime_end" class="col-md-4 col-form-label text-md-end">{{ __('Date Time End') }}</label>

                <div class="col-md-6">
                  <input id="edit_datetime_end" type="datetime-local" class="form-control" name="datetime_end" required>
                </div>
              </div>

              <!-- Shift -->
              <div class="row mb-3">
                <label for="edit_shift" class="col-md-4 col-form-label text-md-end">Shift</label>

                <div class="col-md-6">
                  <select class="form-select" aria-label="Select gender" name="shift" id="edit_shift" required>
                    <option value=0 selected>Select ---</option>
                    <option value="AM Shift">AM Shift</option>
                    <option value="PM Shift">PM Shift</option>
                    <option value="Night Shift">Night Shift</option>
                  </select>
                </div>
              </div>

              <!-- Station -->
              <div class="row mb-3">
                <label for="edit_station" class="col-md-4 col-form-label text-md-end">Station</label>

                <div class="col-md-6">
                  <select class="form-select" aria-label="Select station" name="station" id="edit_station" required>
                    <option value=0 selected>Select ---</option>
                    <option value="Nurse Station 1">Nurse Station 1</option>
                    <option value="Nurse Station 2">Nurse Station 2</option>
                    <option value="Nurse Station 3">Nurse Station 3</option>
                  </select>
                </div>
              </div>
              <div>
                <input type="hidden" name="id" id="edit_id">
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

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- For DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function() {
      $('#nurseAssignmentTable').DataTable({
        responsive: true,
        fixedHeader: true
      });
    });
  </script>

  <script>
    const editNurseAssignmentModal = new bootstrap.Modal('#editNurseAssignmentModal', {
      keyboard: false
    });

    function showEditNurseAssignmentModal(nurseassignment_id) {
      fetch('{{ url('/admin/shownurseassignment/') }}/' + nurseassignment_id)
        .then(response => response.json())
        .then(data => {
          // document.getElementById('edit_nurse_id').value = data.user_id;
          document.getElementById('edit_nurse_id').value = data.user.lastname + ', ' + data.user.firstname;
          document.getElementById('edit_datetime_start').value = data.datetime_start;
          document.getElementById('edit_datetime_end').value = data.datetime_end;
          document.getElementById('edit_shift').value = data.shift;
          document.getElementById('edit_station').value = data.station;
          document.getElementById('edit_id').value = data.id;
          editNurseAssignmentModal.show();
        })
    }
  </script>

@endsection