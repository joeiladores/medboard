@extends('layouts.adminlayout')

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-3">
    <h1 class="fw-bold">Users</h1>
    <div class="d-flex flex-lg-row flex-column justify-content-between">
      <h5 class="flex-grow-1">List of Users</h5>

      @if (Route::has('register'))
        <!-- <p><a href="{{ route('register') }}" class="btn btn-primary btn-small">+ Add New User</a></p> -->
        <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#createUserModal">+ New User</button>
        <a href="{{ route('generate-pdf') }}" target="_blank" class="btn btn-warning float-end">⬇ Download PDF</a>
      @endif
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
    
    <!-- Create User Modal -->
    <!-- <div class="modal modal-lg fade" id="createUserModal" tabindex="-1" aria-hidden="true">
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
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> -->

@endsection