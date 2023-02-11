@extends('layouts.adminlayout')

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-3">
  <h1 class="fw-bold">Users</h1>
  <div class="d-flex flex-lg-row flex-column justify-content-between">

    @if (Route::has('register'))
    <p><a href="{{ route('registeruser') }}" class="btn btn-primary me-3 flex-end">+ Add New User</a></p>
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
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
  </script>  

  <script>
    const dataTable = new DataTable('#userTable');  
  </script>

@endsection