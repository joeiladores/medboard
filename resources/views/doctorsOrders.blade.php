@extends('layouts.orders')

@section('content')

<div class="row">
    <div class="col-4">
      <form class="form-inline">
      <label for="sort-by">Search:</label>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
    <div class="col-3">
      <div class="form-inline">
      <label for="sort-by" class="mr-sm-2">Sort by:</label>
        <select class="form-control" id="sort-by">
          <option>Name</option>
          <option>ID</option>
          <option>Date</option>
        </select>
      </div>
    </div>
  </div>

  <div class="card rounded shadow mt-4">
  <div class="card-body">

 
           </form>
           <table class="table mt-3">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient</th>
                    <th>Room ID</th>
                    <th>Date</th>
                    <th>Nurse</th>
                    <th>Orders</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Luna</td>
                    <td>A01</td>
                    <td>01/26/23</td>
                    <td>Nurse Cruz</td>
                    <td><a  href="#" class="btn btn-sm">📝</a></td>
                </tr>
            </tbody>
           </table>
           </div>
</div>
@endsection
