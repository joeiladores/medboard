@extends('layouts.adminlayout', ['title' => 'Admin-Users'])

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-3">
  <div class="d-flex bg-main">
    <div class="flex-grow-1">
      <h4 class="fw-bold text-secondary f-poppins">USERS</h4>
    </div>
    <div class="flex-lg-row justify-content-end">
      @if (Route::has('register'))
      <span><a href="{{ route('registeruser') }}" class="btn btn-primary me-3 flex-end">+ Add New User</a></span>
      <a href="{{ route('generate-userlistpdf') }}" target="_blank" class="btn btn-warning">⬇ Download PDF</a><span>
      </span>

      @endif
    </div>
  </div>



  @if( session('success') )
  <div class="alert alert-success my-3" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive my-3">
    <table class="table table-hover" id="userTable">
      <thead class="third-bg-color">
        <tr>
          <td>User ID</td>
          <td>User Type</td>
          <td>Name</td>
          <td>Department</td>
          <td>Specialization</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Status</td>
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
          <td>{{ $user->department->name }}</td>
          <td>{{ $user->specialization->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->status }}</td>
          <td>
            <a class="btn btn-sm" href="{{ route('edituser', $user->id) }}">🖊️</a>
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

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- For DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.0.7/datatables.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#userTable').DataTable({
        "pageLength": 10,
        "lengthChange": true
      });
    });
  </script>

  @endsection