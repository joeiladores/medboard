@extends('layouts.adminlayout', ['title' => 'Admin-Specialization'])

@section('content')

<!-- Specialization Content - List of Specialization -->
<div class="container-md p-3">
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <div class="flex-grow-1">
      <h4 class="fw-bold text-secondary f-poppins">SPECIALIZATION</h4>
    </div>
    @if (Route::has('register'))
    <button type="button" class="btn btn-primary flex-end" data-bs-toggle="modal" data-bs-target="#createSpecializationModal">+ New Specialization</button>
    @endif
  </div>

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

  <div class="table-responsive my-3">
    <table class="table table-hover" id="specializationTable">
      <thead class="third-bg-color">
        <tr>
          <td>ID</td>
          <td>User Type</td>
          <td>Specialization</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @if(count($specializations) > 0)
        @foreach($specializations as $specialization)
        <tr>
          <td>{{ $specialization->id }}</td>
          <td>{{ $specialization->usertype }}</td>
          <td>{{ $specialization->name }}</td>

          <td>
            <button type="button" class="btn btn-sm" onclick="showEditSpecializationModal({{ $specialization->id }});">🖊️</button>
            <a class="btn btn-sm" href="{{ route('specialization.delete', $specialization->id) }}">❌</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="5" class="p-3 text-center">There are no specializations yet in the database.</td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>

  <!-- Create Specialization Modal -->
  <div class="modal fade" id="createSpecializationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Specialization</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('specialization.store') }}">
              @csrf
              <div class="mb-3">
                <label for="createspec_usertype" class="form-label">User Type</label>
                <select class="form-select" aria-label="Select user type" name="usertype" id="createspec_usertype" required>
                  <option selected> Select ---</option>
                  <option value="admin">admin</option>
                  <option value="doctor">doctor</option>
                  <option value="nurse">nurse</option>
                  <option value="chiefnurse">chief nurse</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="createspec_name" class="form-label">Specialization Name</label>
                <input type="text" class="form-control" name="name" id="createspec_name" required>
              </div>
              <input type="hidden" name="id" id="createspec_id"">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Specialization Modal -->
  <div class="modal fade " id="editSpecializationModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Specialization</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('specialization.update') }}">
              @csrf
              <div class="mb-3">
                <label for="editspec_usertype" class="form-label">User Type</label>
                <select class="form-select" aria-label="Select user type" name="usertype" id="editspec_usertype" required>
                  <option selected> Select ---</option>
                  <option value="admin">admin</option>
                  <option value="doctor">doctor</option>
                  <option value="nurse">nurse</option>
                  <option value="chiefnurse">chief nurse</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="editspec_name" class="form-label">Specialization</label>
                <input type="text" class="form-control" name="name" id="editspec_name" required>
              </div>
              <input type="hidden" name="id" id="editspec_id"">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- For DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#specializationTable').DataTable({
        "pageLength": 10,
        "lengthChange": true
      });
    });
  </script>

  <script>
    const editSpecializationModal = new bootstrap.Modal('#editSpecializationModal', {
      keyboard: false
    });

    function showEditSpecializationModal(specialization_id) {
      fetch('{{ url(' / admin / showspecialization / ') }}/' + specialization_id)
        .then(response => response.json())
        .then(data => {
          document.getElementById('editspec_usertype').value = data.usertype;
          document.getElementById('editspec_name').value = data.name;
          document.getElementById('editspec_id').value = data.id;
          editSpecializationModal.show();
        })
    }
  </script>


  @endsection