@include('profile.partials.header', ['title' => 'MedBoard - Admitted Patients'])

<div class="col mx-3 my-3">
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

<div id="PatientList" class="tabcontent">
    <table class="table table-hover" id="patientTable">
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
                <td>{{ $admitpatient->patient_id->lastname }}, {{ $admitpatient->patient_id->firstname }} {{ $admitpatient->patient_id->midname }}</td>

                <td>Dr. Kwak</td>
                <td>123456</td>
                <td>Admitted</td>
                <td>edit delete</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('profile.partials.footer')