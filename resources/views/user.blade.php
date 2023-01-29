@extends('layouts.adminlayout')

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-5">
    <h1 class="fw-bold">Users</h1>
    <div class="d-flex flex-lg-row flex-column justify-content-between">
      <h5>List of Users</h5>
      <p><a href="#" class="btn btn-primary btn-small">+ Add New User</a></p>
    </div>    

    @if( session('success') )
    <div class="alert alert-success my-3" role="alert">
      {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive my-3">
      <table class="table table-hover">
        <thead class="bg-secondary bg-gradient text-light fw-bold">
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

@endsection