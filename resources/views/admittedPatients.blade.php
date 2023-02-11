@include('profile.partials.header', ['title' => 'MedBoard - Admitted Patients'])

<div class="row mx-3">
    <div class="col my-3">
        <div class="card rounded shadow mb-2">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <h3 class="mr-2 second-text">ADMITTED PATIENTS</h3>
                    <div>
                        <i class="fa-solid fa-bed-pulse second-text fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="AdmittedList" class="tabcontent">
        <table class="table table-hover" id="admittedTable">
            <thead>
                <tr>
                    <th>Patients ID#</th>
                    <th>Full Name</th>
                    <th>Admitted Doctor</th>
                    <th>Room #</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allAdmitted as $admitpatient)
                <tr>
                    <td>{{ $admitpatient->id }}</td>
                    <td>{{ $admitpatient->patient_id }} {{ $admitpatient->lastname }}, {{ $admitpatient->firstname }} {{ $admitpatient->midname }}</td>

                    <td>{{ $admitpatient->admitting_doctor_id }}</td>
                    <td>{{ $admitpatient->bed_id }}</td>
                    <td>{{ $admitpatient->status }}</td>
                    <td>edit delete</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- For DataTables -->
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
</script>

<script>
    var dataTable = new DataTable("#admittedTable");
</script>


@include('profile.partials.footer')