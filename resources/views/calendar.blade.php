@extends('layouts.adminlayout', ['title' => 'Calendar'])

@section('head')

<!-- Flatpickr CSS -->
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

<!-- SweetAlert CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

@endsection


@section('content')

<div class="container-fluid bg-calendar m-0 p-3">

  <!-- Calendar Title and Buttons -->
  <div class="row">
    <div class="col-12">
      <div class="card border-0">
        <div class="card-body d-flex align-items-center flex-wrap">
          <div class="card-title mb-0 flex-fill">
            <h3 class="fw-bold text-secondary f-poppins">CALENDAR</h3>
          </div>
          @if (Auth::user()->usertype === 'admin')
          <div class="mt-2 mt-sm-0 me-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addScheduleModal">
              + Add Schedule
            </button>
          </div>
          @endif
          <div class="mt-2 mt-sm-0">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
              + Add Event
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Display Calendar -->
  <div class="container my-3 p-0">
    <div class="card border-0">
      <div class="card-body">
        <div class="my-sm-0" id="calendar"></div>
      </div>
    </div>
  </div>

</div>


<!-- Add Schedule Modal -->
<div class="modal fade" id="addScheduleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header primary-bg text-white">
        <h5 class="modal-title">Add Schedule</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('storecalendar') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="d-flex flex-column align-items-start">
            <div class=" w-100"">
              <div class=" fade active show" id="-3">

              <div class="row g-3 align-items-center form-group">
                <div class="col-2">
                  <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-10">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Event Name">
                </div>
              </div>

              <div class="row g-3 align-items-center form-group">
                <div class="col-2">
                  <label class="col-form-label">
                    <i class="fs-3 bi bi-person"></i>
                  </label>
                </div>
                <div class="col-10">
                  <select name="user_id" class="form-select choices-multiple-remove-button">
                    <option value="null">Select User</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id}}">{{ $user->lastname }}, {{ $user->firstname }} [{{ $user->usertype }}]</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row g-3 align-items-center form-group">
                <div class="col-2">
                  <label for="date_start" class="col-form-label text-center">
                    <i class="fs-3 bi bi-calendar-event"></i>
                  </label>
                </div>
                <div class="col-5">
                  <input type="text" name="date_start" id="date_start" class="form-control datepicker" placeholder="Select Start Date ">
                </div>
                <div class="col-5">
                  <input type="text" name="date_end" id="date_end" class="form-control datepicker" placeholder="Select End Date ">
                </div>
              </div>

              <div class="row g-3 align-items-center form-group">
                <div class="col-2">
                  <label for="time_start" class="col-form-label">
                    <i class="fs-3 bi bi-clock"></i>
                  </label>
                </div>
                <div class="col-10 d-flex align-items-center justify-content-center">
                  <input type="text" name="time_start" id="time_start" class="form-control timepicker" placeholder="Time Start ">
                  <span class="mx-2">To</span>
                  <input type="text" name="time_end" id="time_end" class="form-control timepicker" placeholder="Time End">
                </div>
              </div>

              <div class="row g-3 align-items-center form-group">
                <div class="col-2">
                  <label for="place" class="col-form-label">
                    <i class="fs-3 bi bi-house-door"></i>
                  </label>
                </div>
                <div class="col-10">
                  <input type="text" name="place" id="place" class="form-control" placeholder="Place">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div>
      <input type="hidden" name="author_id" id="author_id" value={{Auth::user()->id}}>
    </div>
    <div class="modal-footer border-0">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
      </button>
      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="save">Save</button>
    </div>
    </form>
  </div>
</div>
</div>

@endsection


@section('script')

<!-- FullCalendar  -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>

<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script>
  // *****
  // Calendar JS
  // *
  document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'bootstrap5',
      timeZone: 'Asia/Manila',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      dayMaxEvents: true, // allow "more" link when too many events
      selectable: true,
      events: @json($schedules)
    });

    calendar.render();
  });


  // *****
  // Flatpickr JS
  // *
  flatpickr('.datepicker', {
    dateFormat: 'Y-m-d',
  });

  flatpickr('.timepicker', {
    enableTime: true,
    time_24hour: true,
    altInput: true,
    altFormat: 'H:i',
    dateFormat: 'H:i',
    noCalendar: true,
  });
</script>

<!-- Sweet Alert JS -->
@if(session('success'))
<script>
  Swal.fire({
    title: 'Success!',
    text: '{{ session('success') }}',
    icon: 'success',
    confirmButtonColor: 'rgb(66,100,208)',
    confirmButtonText: 'OK'
  });
</script>
@endif

@if(session('error'))
<script>
  Swal.fire({
    title: 'Error!',
    text: '{{ session('error') }}',
    icon: 'error',
    confirmButtonColor: 'rgb(66,100,208)',
    confirmButtonText: 'OK'
  });
</script>
@endif



@endsection

