@extends('layouts.adminlayout', ['title' => 'Admin-Departments'])

@section('content')

<!-- Department Content - List of Departments -->
<div class="container-md p-3">
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <div class="flex-grow-1">
      <h4 class="fw-bold text-secondary f-poppins">DEPARTMENTS</h4>
    </div>
    @if (Route::has('register'))
    <button type="button" class="btn btn-primary flex-end" data-bs-toggle="modal" data-bs-target="#createDepartmentModal">+ New Department</button>
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
    <table class="table table-hover" id="departmentTable">
      <thead class="third-bg-color">
        <tr>
          <td>Department ID</td>
          <td>Department Name</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @if(count($departments) > 0)
        @foreach($departments as $department)
        <tr>
          <td>{{ $department->id }}</td>
          <td>{{ $department->name }}</td>

          <td>
            <button type="button" class="btn btn-sm" onclick="showEditDepartmentModal({{ $department->id }});">🖊️</button>
            <a class="btn btn-sm" href="{{ route('department.delete', $department->id) }}">❌</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="5" class="p-3 text-center">There are no departments yet in the database.</td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>

  <!-- Create Department Modal -->
  <div class="modal fade" id="createDepartmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Department</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('department.store') }}">
              @csrf
              <div class="mb-3">
                <label for="createdept_name" class="form-label">Department Name</label>
                <input type="text" class="form-control" name="name" id="createdept_name" required>
              </div>
              <input type="hidden" name="id" id="id"">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Department Modal -->
  <div class="modal fade " id="editDepartmentModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Department</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card py-3 px-4 border-0">
            <form method="POST" action="{{ route('department.update') }}">
              @csrf
              <div class="mb-3">
                <label for="editdept_name" class="form-label">Department Name</label>
                <input type="text" class="form-control" name="name" id="editdept_name" required>
              </div>
              <input type="hidden" name="id" id="editdept_id"">
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
      $('#departmentTable').DataTable({
        "pageLength": 10,
        "lengthChange": true
      });
    });
  </script>

  <script>
    const editDepartmentModal = new bootstrap.Modal('#editDepartmentModal', {
      keyboard: false
    });

    function showEditDepartmentModal(department_id) {
      fetch('{{ url(' / admin / showdepartment / ') }}/' + department_id)
        .then(response => response.json())
        .then(data => {
          document.getElementById('editdept_name').value = data.name;
          document.getElementById('editdept_id').value = data.id;
          editDepartmentModal.show();
        })
    }
  </script>


  @endsection