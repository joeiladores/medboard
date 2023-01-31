@extends('layouts.adminlayout')

@section('content')

<!-- Main Content - List of Users -->
<div class="container-md p-5">
    <h1 class="fw-bold">Beds</h1>
    <div class="d-flex flex-lg-row flex-column justify-content-between">
      <h5>List of Beds</h5>

      @if (Route::has('register'))
        <!-- <p><a href="{{ route('register') }}" class="btn btn-primary btn-small">+ Add New User</a></p> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBedModal">+ New Bed</button>
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
            <td>Beds ID</td>
            <td>Bed Number</td>
            <td>Room</td>
            <td>Room Type</td>
            <td>Station</td>            
            <td>Status</td>
          </tr>
        </thead>
        <tbody>
          @if(count($beds) > 0)
          @foreach($beds as $bed)
          <tr>
            <td>{{ $bed->id }}</td>
            <td>{{ $bed->bednum }}</td>
            <td>{{ $bed->room }}</td>
            <td>{{ $bed->room_type }}</td>
            <td>{{ $bed->station }}</td>
            <td>{{ $bed->status }}</td>
            <td>  
              <a class="btn btn-sm" href="#">🖊️</a>
              <a class="btn btn-sm" href="#">❌</a>
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="5" class="p-3 text-center">There are no beds yet in the database.</td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
    
    <!-- Create Bed Modal -->
    <div class="modal modal-lg fade" id="createUserModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Bed</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card py-3 px-4 border-0">
                  <form method="POST" action="{{ route('storebed') }}">
                    @csrf
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection