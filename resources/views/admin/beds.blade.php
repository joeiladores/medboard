@extends('layouts.adminlayout', ['title' => 'Admin-Beds'])

@section('content')

  <!-- Bed Content - List of Beds -->
  <div class="container p-4">
    <div class="row pb-2">
      <div class="col">
        <h3 class="fw-bold text-secondary f-poppins">BEDS</h3>
      </div>
      <div class="col d-flex flex-grow-1 justify-content-end">
        @if (Route::has('register'))
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createBedModal">+ New Bed</button>
        @endif
      </div>    
    </div>
  </div>

  <div class="container px-3">
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
        <table id="bedTable" class="table table-hover display nowrap" cellspacing="0" width="100%">
          <thead class="primary-bg text-light">
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
              <td colspan="7" class="p-3 text-center">There are no beds yet in the database.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>    
    </div>    
  </div>

  <!-- Create Bed Modal -->
  <div class="modal fade" id="createBedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header primary-bg text-light">
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
                <button type=" submit" class="btn btn-primary">Submit</button>
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
        <div class="modal-header primary-bg text-light">
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
                  <option selected class="text-center">Select ---</option>
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
                  <option selected class="text-center">Select ---</option>
                  <option value="vacant">Vacant</option>
                  <option value="occupied">Occupied</option>
                </select>
              </div>
              <input type="hidden" name="id" id="editbed_id">
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/r-2.4.0/rr-1.3.2/sc-2.1.0/sl-1.6.0/datatables.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script>

    $(document).ready(function() {
        $('#bedTable').DataTable({
          responsive: true,
          fixedHeader: true
        });
    });
  
  </script>

  <script>
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