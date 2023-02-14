@extends($layout, ['title' => $title])
@section('content')

<style>
  body {
    background-color: #F3F3F9;
  }
</style>


<div class="container p-3">
  <div class="d-flex primary-bg rounded-3 p-2 justify-content-center">
    <h5 class="f-roboto fw-bold text-light my-auto">KARDEX</h5>
  </div>
  <div class="container">

  

    <!-- Personal Information -->
    <div class="fw-bold fs-3 mt-3">PATIENT</div>
    <div class="row bg-light p-3 rounded-2 shadow">
      <div class="col-md">
        <div>NAME: </div>
        <div>AGE: </div>
        <div>GENDER: </div>
        <div>ADDRESS: </div>
      </div>
      <div class="col-md">    
        <div>BLOOD TYPE: </div>
        <div>WEIGHT: </div>    
        
            
      </div>
    </div>

    <div class="row">
      <div class="col-md bg-light p-3 me-3 my-3 rounded-2 shadow">
        <div>ADMISSION NUMBER: </div>
        <div>DATE/TIME ADMITTED: </div>
        <div>BED/ROOM: </div>    

        <div>ADMITTING DOCTOR: </div>        
        <div>COMPLAINT: </div>
        <div>IMPRESSION DIAGNOSIS: </div>  
      </div>
      <div class="col-md bg-light p-3 my-3 rounded-2 shadow">        
        <div>PRIMARY DOCTOR: </div>
        <div>SURGERY DONE: </div>
        <div>DATE/TIME OF SURGERY: </div>
      </div>
    </div>

  </div>

</div>





@endsection