@extends('layouts.adminlayout', ['title' => 'Admin-Users'])

@section('content')

  <!-- Main Content - List of Users -->
  <div class="container p-4">
    <div class="row py-2">
      <div class="col">
        <h3 class="fw-bold text-secondary f-poppins">USERS</h3>
      </div>
      <div class="col d-flex flex-grow-1 justify-content-end">
        @if (Route::has('register'))
        <span><a href="{{ route('registeruser') }}" class="btn btn-primary flex-end">+ Add New User</a></span>
        <!-- <a href="{{ route('generate-userlistpdf') }}" target="_blank" class="btn btn-warning">⬇ Download PDF</a><span> -->
        </span>

        @endif
      </div>
    </div>
  </div>



  @if( session('success') )
  <div class="container px-4">
    <div class="alert alert-success my-3" role="alert">
      {{ session('success') }}
    </div>
  </div>
  @endif

  <div class="container px-4">
    <div class="row">
      <div class="col-md-12">
        <table id="userTable" class="table table-hover display nowrap" cellspacing="0" width="100%">
          <thead class="third-bg-color">
            <tr>
              <td>User ID</td>              
              <td>Name</td>
              <td>User Type</td>
              <td>Department</td>
              <td>Specialization</td>
              <td>Email</td>
              <td>Phone</td>  
              <td>Action</td>   
              <td>Status</td>
            </tr>
          </thead>
          <tbody>
            @if(count($users) > 0)
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->usertype }}</td>              
              <td>{{ $user->department->name }}</td>
              <td>{{ $user->specialization->name }}</td>
              <td>{{ $user->email }}</td>              
              <td>{{ $user->phone }}</td>              
              <td>
                <a class="btn btn-sm" href="{{ route('edituser', $user->id) }}">🖊️</a>
                <a class="btn btn-sm" href="{{ route('deleteuser', $user->id) }}">❌</a>
              </td>  
              <td>{{ $user->status }}</td>            
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="9" class="p-3 text-center">There are no users yet in the database.</td>
            </tr>
            @endif
          </tbody>
        </table>
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
      $('#userTable').DataTable({
        responsive: true,
        fixedHeader: true
      });
    });
  </script>

  @endsection