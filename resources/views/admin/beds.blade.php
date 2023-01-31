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
            <td>Action</td>
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
    <div class="modal fade" id="createBedModal" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-hidden="true">
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
                    <div class="mb-3">
                      <label for="createbed_bednum" class="form-label">Bed Number</label>
                      <input type="text" class="form-control" name="bednum" id="createbed_bednum" required>
                    </div>
                    <div class="mb-3">
                      <label for="createbed_room" class="form-label">Room</label>
                      <input type="text" class="form-control" name="room" id="createbed_room" required>
                    </div>
                    <div class="mb-3">
                      <label for="createbed_room_type" class="form-label">Room Type</label>
                      <select class="form-select" aria-label="Select room type" name="room_type" id="createbed_room_type" required>
                          <option selected class="text-center"> --- Select ---</option>   
                          <option value="Private">Private</option>
                          <option value="Semi-Private">Semi-Private</option>
                          <option value="Ward">Ward</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="createbed_station" class="form-label">Station</label>
                      <select class="form-select" aria-label="Select station" name="station" id="createbed_station" required>
                          <option selected class="text-center"> --- Select ---</option>    
                          <option value="Nurse Station 1">Nurse Station 1</option>
                          <option value="Nurse Station 2">Nurse Station 2</option>
                          <option value="Nurse Station 3">Nurse Station 3</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="createbed_status" class="form-label">Status</label>
                      <select class="form-select" aria-label="Select status" name="status" id="createbed_status" required>
                          <option selected class="text-center"> --- Select ---</option>    
                          <option value="Empty">Empty</option>
                          <option value="Occupied">Occupied</option>
                      </select>
                    </div>
                    <input type="hidden" name="id" id="id"">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection