@extends('layouts.adminlayout', ['title' => 'Calendar'])

@section('content')

<style>
  #calendar {
    max-width: 1100px;
    margin: 40px auto;
  }
</style>

<script>
  var SITEURL = "{{ url('/') }}";

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
      nowIndicator: true,
      editable: true,
      selectable: true,
      navLinks: true,
      timeZone: 'Asia/Manila',
      locale: '',
      initialView: 'dayGridMonth',
      eventColor: 'gray',
      // resources: [{
      //     id: 'a',
      //     title: 'Station 1'
      //   },
      //   {
      //     id: 'b',
      //     title: 'Station 2'
      //   }
      // ],
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'resourceTimeGridDay,resourceTimeGridWeek,dayGridMonth'
      },
      events: "{{ route('calendar.getevents') }}",
      dateClick: function(info) {
        var start = moment(info.dateStr).format('YYYY-MM-DD\THH:mm');
        var end = moment(info.dateStr).add(30, 'minutes').format('YYYY-MM-DD\THH:mm');

        document.getElementById('create-start').value = start;
        document.getElementById('create-end').value = end;

        var myModal = new bootstrap.Modal(document.getElementById('modal-create'))
        myModal.show()
      },
      eventClick: function(info) {
        let id_event = info.event._def['publicId'];
        let _token = document.getElementsByName("_token")[0].value;
        document.getElementById('id').value = id_event;

        $.ajax({
          method: "get",
          url: SITEURL + '/calendar/' + id_event + '/edit',
          data: {
            _token: _token
          },
          success: function(response) {
            document.getElementById('update-title').value = response.data.title;
            document.getElementById('update-description').value = response.data.description;
            document.getElementById('update-start').value = response.data.start;
            document.getElementById('update-end').value = response.data.end;
            document.getElementById('update-color').value = response.data.color;
            document.getElementById('update-resource').value = response.data.resourceId;
            document.getElementById('update-status').value = response.data.status;

            var myModal = new bootstrap.Modal(document.getElementById('modal-update'))
            myModal.show()
          }
        });
      },
      eventDrop: function(info) {
        if (!confirm("You requested the change: " + info.event.title +
            "\nThe event will be changed to the date: " + moment(info.event.startStr).format(
              'DD-MM-YYYY HH:mm:ss'))) {
          info.revert();
        } else {
          console.log(info)
          let id_event = info.event._def['publicId'];
          let _token = document.getElementsByName("_token")[0].value;
          let start = moment(info.event.startStr).format('YYYY-MM-DD\THH:mm');
          let end = moment(info.event.endStr).format('YYYY-MM-DD\THH:mm');
          let resource = info.event._def.resourceIds[0];
          $.ajax({
            url: "{{route('calendar.dropevents')}}",
            method: "post",
            data: {
              id: id_event,
              resourceId: resource,
              start: start,
              end: end,
              _token: _token
            },
            success: function(result) {
              alert('Success');
            }
          });
        }
      },
      eventResize: function(info) {
        let id_event = info.event._def['publicId'];
        let _token = document.getElementsByName("_token")[0].value;
        let end = moment(info.event.endStr).format('YYYY-MM-DD\THH:mm');

        $.ajax({
          url: "{{route('calendar.resizeevents')}}",
          method: "post",
          data: {
            id: id_event,
            end: end,
            _token: _token
          },
          success: function(result) {
            alert("Update successfull");
          }
        });
      },
    });
    calendar.render();
  });
</script>

<div id='calendar'></div>


{{--Modal Create--}}
<div class="modal fade" id="modal-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('calendar.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="create-title" name="title"
                               aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="create-description" name="description"
                               aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" name="color" class="form-control form-control-color"
                               id="create-color" value="#563d7c"
                               title="Choose your color" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" id="create_status" name="status"
                                required>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Canceled</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Resource</label>
                        <select class="form-select" aria-label="Default select example" id="create_resource"
                                name="resourceId" required>
                            <option value="a">Nurse Station 1</option>
                            <option value="b">Nurse Station 1</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="datetime-local">Start</label>
                        <input type="datetime-local" class="form-control" id="create-start" name="start" required>
                    </div>
                    <div class="mb-3">
                        <label for="datetime-local">End</label>
                        <input type="datetime-local" class="form-control" id="create-end" name="end" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Modal Update--}}
<div class="modal fade" id="modal-update" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('calendar.updateevents')}}">
                @method('PUT')
                @csrf
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="update-title" name="title"
                               aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="update-description" name="description"
                               aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" name="color" class="form-control form-control-color"
                               id="update-color"
                               title="Choose your color" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" id="update-status" name="status"
                                required>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Canceled</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleColorInput" class="form-label">Resource</label>
                        <select class="form-select" aria-label="Default select example" id="update-resource"
                                name="resourceId" required>
                            <option value="a">Nurse Station 1</option>
                            <option value="b">Nurse Station 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="datetime-local">Start</label>
                        <input type="datetime-local" class="form-control" id="update-start" name="start" required>
                    </div>
                    <div class="mb-3">
                        <label for="datetime-local">End</label>
                        <input type="datetime-local" class="form-control" id="update-end" name="end" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection