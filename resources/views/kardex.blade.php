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

    @foreach($kardexinfo as $kardex)
    <!-- Personal Information -->
    <div class="fw-bold fs-4 mt-3">PATIENT</div>
    <div class="row bg-white p-3 rounded-2 shadow">
      <div class="col-md">
        <div>NAME: <span class="fs-roboto fw-bold fs-5"> {{ $kardex->p_lastname }}, {{ $kardex->p_firstname }} {{ $kardex->p_midname }}</span></div>
        <div>BIRTHDATE: <span class="fs-roboto fw-bold fs-5">{{ date('F j, Y', strtotime($kardex->birth_date)) }}</span></div>
        <div>GENDER: <span class="fs-roboto fw-bold fs-5">{{ ucfirst($kardex->gender) }}</span></div>       
      </div>
      <div class="col-md">
      <div>ADDRESS: <span class="f-roboto fw-bold fs-5">{{ $kardex->address }}</span></div>    
        <div>BLOOD TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->blood_type }}</span></div>
        <div>WEIGHT: <span class="f-roboto fw-bold fs-5">{{ $kardex->weight }}</span></div>     
      </div>
    </div>

    <div class="fw-bold fs-4 mt-3">ADMISSION INFO</div>
    <div class="row">
      <div class="col-md bg-white p-3 me-3 rounded-2 shadow">
        <div>ADMISSION NUMBER: <span class="f-roboto fw-bold fs-5">{{ $kardex->id }}</span></div>
        <div>DATE/TIME ADMITTED: <span class="f-roboto fw-bold fs-5">{{ date("M. j, Y h:i A", strtotime($kardex->created_at)) }}</span></div>
        <div>BED/ROOM/TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->bednum }} /Room {{ $kardex->room }} / {{ $kardex->room_type }}</span></div>    

        <div>ADMITTING DOCTOR: <span class="f-roboto fw-bold fs-5">Dr. {{ $kardex->ad_firstname }} {{ $kardex->ad_lastname }}, MD</span></div>        
        <div class="bg-light text-primary">COMPLAINT: <span class="f-roboto fw-bold fs-5">{{ $kardex->complain }}</span></div>
        <div class="bg-light text-primary">IMPRESSION DIAGNOSIS: <span class="f-roboto fw-bold fs-5">{{ $kardex->impression_diagnosis }}</span></div>
      </div>
      <div class="col-md bg-white p-3 rounded-2 shadow">
        <div>ADMISSION TYPE: <span class="f-roboto fw-bold fs-5">{{ $kardex->type }}</span></div>        
        <div>PRIMARY DOCTOR: <span class="f-roboto fw-bold fs-5">Dr. {{ $kardex->pd_firstname }} {{ $kardex->pd_lastname }}, MD</div>
        <div>SURGERY DONE: <span class="f-roboto fw-bold fs-5"></span> &nbsp;</div>
        <div>DATE/TIME OF SURGERY: <span class="f-roboto fw-bold fs-5"> &nbsp;</span></div>
      </div>
    </div>

    @endforeach

  </div>

</div>





@endsection