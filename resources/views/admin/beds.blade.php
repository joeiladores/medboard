@extends('layouts.adminlayout')

@section('content')

<!-- Bed Content - List of Beds -->
<div class="container-md p-3">
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <h1 class="fw-bold">Beds</h1>
    @if (Route::has('register'))
      <!-- <p><a href="{{ route('register') }}" class="btn btn-primary btn-small">+ Add New User</a></p> -->
      <button type="button" class="btn btn-primary flex-end" data-bs-toggle="modal" data-bs-target="#createBedModal">+ New Bed</button>
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
      <table class="table table-hover" id="bedTable">
        <thead class="fw-bold">
          <tr>
            <td>Bed ID</td>
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
              <button type="button" class="btn btn-sm" onclick="showEditBedModal({{ $bed->id }});">🖊️</button>       
              <a class="btn btn-sm" href="{{ route('deletebed', $bed->id) }}">❌</a>
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
                      <option selected> Select ---</option>   
                      <option value="Private">Private</option>
                      <option value="Semi-Private">Semi-Private</option>
                      <option value="Ward">Ward</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="createbed_station" class="form-label">Station</label>
                  <select class="form-select" aria-label="Select station" name="station" id="createbed_station" required>
                      <option selected> Select ---</option>    
                      <option value="Nurse Station 1">Nurse Station 1</option>
                      <option value="Nurse Station 2">Nurse Station 2</option>
                      <option value="Nurse Station 3">Nurse Station 3</option>
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

    <!-- Edit Bed Modal -->
    <div class="modal fade " id="editBedModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Bed Information</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card py-3 px-4 border-0">
              <form method="POST" action="{{ route('updatebed') }}">
                @csrf
                <div class="mb-3">
                  <label for="editbed_bednum" class="form-label">Bed Number</label>
                  <input type="text" class="form-control bg-light" name="bednum" id="editbed_bednum" required readonly>
                </div>
                <div class="mb-3">
                  <label for="editbed_room" class="form-label">Room</label>
                  <input type="text" class="form-control" name="room" id="editbed_room" required>
                </div>
                <div class="mb-3">
                  <label for="editbed_room_type" class="form-label">Room Type</label>
                  <select class="form-select" aria-label="Select room type" name="room_type" id="editbed_room_type" required>
                      <option selected class="text-center"> --- Select ---</option>   
                      <option value="Private">Private</option>
                      <option value="Semi-Private">Semi-Private</option>
                      <option value="Ward">Ward</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="editbed_station" class="form-label">Station</label>
                  <select class="form-select" aria-label="Select station" name="station" id="editbed_station" required>
                      <option selected class="text-center"> --- Select ---</option>    
                      <option value="Nurse Station 1">Nurse Station 1</option>
                      <option value="Nurse Station 2">Nurse Station 2</option>
                      <option value="Nurse Station 3">Nurse Station 3</option>
                      <option value="ER">ER</option>
                      <option value="Outpatient">Outpatient</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="editbed_status" class="form-label">Status</label>
                  <select class="form-select" aria-label="Select status" name="status" id="editbed_status" required>
                      <option selected class="text-center"> --- Select ---</option>    
                      <option value="vacant">Vacant</option>
                      <option value="occupied">Occupied</option>
                  </select>
                </div>                
                <input type="hidden" name="id" id="editbed_id"">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>   

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- For DataTables -->
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
  </script>  

   <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    const dataTable = new DataTable('#bedTable');  

    const editBedModal = new bootstrap.Modal('#editBedModal', {
      keyboard: false
    });

    function showEditBedModal(bed_id) {
      fetch('{{ url('/admin/showbed/') }}/' + bed_id)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editbed_bednum').value = data.bednum;
            document.getElementById('editbed_room').value = data.room;
            document.getElementById('editbed_room_type').value = data.room_type;
            document.getElementById('editbed_station').value = data.station;
            document.getElementById('editbed_status').value = data.status;
            document.getElementById('editbed_id').value = data.id;
            editBedModal.show();
        })
    } 

  </script>

@endsection