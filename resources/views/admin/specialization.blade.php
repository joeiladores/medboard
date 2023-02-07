@extends('layouts.adminlayout')

@section('content')

<!-- Specialization Content - List of Specialization -->
<div class="container-md p-3">
  <div class="d-flex flex-lg-row flex-column justify-content-between">
    <h1 class="fw-bold">Specialization</h1>
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
        <thead class="fw-bold">
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
    <div class="modal fade" id="createDepartmentModal" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-hidden="true">
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
                <button type="submit" class="btn btn-primary">Submit</button>
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
                  <label for="editspec_name" class="form-label">Specioalization Name</label>
                  <input type="text" class="form-control" name="name" id="editspec_name" required>  
                </div>                        
                <input type="hidden" name="id" id="editspec_id"">
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
    const dataTable = new DataTable('#specializationTable');  

    const editSpecializationModal = new bootstrap.Modal('#editSpecializationModal', {
      keyboard: false
    });

    function showEditSpecializationModal(specialization_id) {
      fetch('{{ url('/admin/showspecialization/') }}/' + specialization_id)
        .then(response => response.json())
        .then(data => {
          document.getElementById('editspec_usertype').value = data.usertype;
            document.getElementById('editspec_name').value = data.name;
            document.getElementById('editdept_id').value = data.id;
            editDepartmentModal.show();
        })
    } 

  </script>


@endsection