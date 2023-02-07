@include('profile.partials.header', ['title' => 'MedBoard - Patients'])

<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col my-3">
            <div class="card rounded shadow mb-2">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h3 class="mr-2 second-text">PATIENTS</h3>
                        <div>
                            <!-- Add Patient Modal Button -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPatientModal">
                                + Add Patient
                            </button>

                            <!-- Add Patient Modal-->
                            <div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientModalLabel" aria-hidden="true">
                                <<div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title text-light" id="addPatientModal">+ Add Patient</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <form method="POST" action="{{ route('storePatient') }}">
                                                    @csrf
                                                    <div class="row g-3 p-3">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="midname" name="midname" placeholder="Middle Name (optional)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <select id="marital_status" name="marital_status" class="form-select" required>
                                                                <option selected>Marital Status</option>
                                                                <option value="single">single</option>
                                                                <option value="married">married</option>
                                                                <option value="widowed">widowed</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <select id="gender" name="gender" class="form-select" required>
                                                                <option selected>Gender</option>
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <select id="blood_type" name="blood_type" class="form-select" required>
                                                                <option selected>Blood Type</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="health_insurance" name="health_insurance" placeholder="Health Insurance (optional)">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" id="relative_fullname" name="relative_fullname" placeholder="Relative Fullname" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="relation" name="relation" placeholder="Relation to patient">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="number" class="form-control" id="relative_phone" name="relative_phone" placeholder="Relative Contact">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);float:right">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- TABS -->

        <div id="PatientList" class="tabcontent">
            <table class="table table-hover" id="patientTable">
                <thead>
                    <tr>
                        <th>Patients ID#</th>
                        <th>Full Name</th>
                        <th>Medical History</th>
                        <th>Room #</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allPatients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->lastname }}, {{ $patient->firstname }} {{ $patient->midname }}</td>
                        <td>
                            <!-- Modal button to show medical history -->
                            <a href="/showmedhistory/{{ $patient->id }}" class="btn btn-sm btn-warning" role="button">View Medical History</a>

                            <!-- Create Medical History Modal of a Patient -->
                            <!-- Medical History Modal Button -->
                            <button type="button" class="btn btn-sm btn-success" onclick="showCreateMedHistoryModal({{ $patient->id }})">
                                + Add Medical History
                            </button>

                            <!-- Medical History Modal Inputs-->
                            <div class="modal fade" id="createMedHistoryModal" tabindex="-1" aria-labelledby="createMedHistoryModalLabel" aria-hidden="true">
                                <<div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title text-light" id="createMedHistoryModal">Create Patient's Medical History</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <form method="POST" action="{{ route('storeMedHistory') }}">
                                                    @csrf
                                                    <div class="row g-3 p-3">
                                                        <div class="col-md-3">
                                                            <input type="date" class="form-control" id="date" name="date" required>
                                                        </div>
                                                        <div></div>
                                                        <div class="col-md-4">
                                                    
                                                        <p id="medhistory_patient_name"></p>
                                                            <input type="number" class="form-control" id="createMed_patient_id" name="patient_id" required readonly>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="conditions" class="form-label">Check the conditions that apply to you or to any members of your immediate relatives:</label>
                                                            <input type="text" class="form-control" id="conditions" name="conditions" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="symptoms" class="form-label">Check the symptoms that you're currently experiencing:</label>
                                                            <input type="text" class="form-control" id="symptoms" name="symptoms" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="medications" class="form-label">Are you currently taking any medication?</label>
                                                            <input type="text" class="form-control" id="medications" name="medications" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="allergies" class="form-label">Do you have any medication allergies?</label>
                                                            <input type="text" class="form-control" id="allergies" name="allergies" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="bad_habit" class="form-label">Do you use or do you have history of using tobacco/alcohol/illegal drugs?</label>
                                                            <input type="text" class="form-control" id="bad_habit" name="bad_habit" required>
                                                            
                                                        </div>
                                                        
                                                        <hr>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);float:right">Add to patient</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </td>
                        <td>Room Pending</td>
                        <td>Active</td>

                        <td class="d-flex">
                            <a href="{{ route('destroyPatient', $patient->id) }}" class="btn btn-sm btn-danger text-light me-1">Delete</a>
                            <!-- Edit Patient Modal Button -->
                            <div>
                                <button type="button" class="btn btn-primary" onclick="showEditPatientModal({{ $patient->id }})">
                                    Edit
                                </button>

                                <!-- Edit Patient Modal-->
                                <div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="editPatientLabel" aria-hidden="true">
                                    <<div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-light" id="editPatient">Edit Patient</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <form method="POST" action="{{ route('updatePatient') }}">
                                                        @csrf
                                                        <div class="row g-3 p-3">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="editpatient_lastname" name="lastname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="editpatient_firstname" name="firstname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="editpatient_midname" name="midname">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select id="editpatient_marital_status" name="marital_status" class="form-select" required>
                                                                    <option selected value="{{ $patient->marital_status }}">{{$patient->marital_status }}</option>
                                                                    <option value="single">single</option>
                                                                    <option value="married">married</option>
                                                                    <option value="widowed">widowed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="date" class="form-control" id="editpatient_birth_date" name="birth_date" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select id="editpatient_gender" name="gender" class="form-select" required>
                                                                    <option selected value="{{ $patient->gender }}">{{ $patient->gender }}</option>
                                                                    <option value="male">male</option>
                                                                    <option value="female">female</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select id="editpatient_blood_type" name="blood_type" class="form-select" required>
                                                                    <option selected value="{{ $patient->blood_type }}">{{ $patient->blood_type }}</option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="AB">AB</option>
                                                                    <option value="O">O</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" id="editpatient_address" name="address" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="number" class="form-control" id="editpatient_phone" name="phone" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="editpatient_health_insurance" name="health_insurance">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" id="editpatient_relative_fullname" name="relative_fullname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="editpatient_relation" name="relation" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="number" class="form-control" id="editpatient_relative_phone" name="relative_phone" required>
                                                            </div>
                                                            <input type="hidden" name="id" id="editpatient_id">
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);float:right">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

           

        </div>

    </div>

</div>
</div>

</div>


@include('profile.partials.footer')