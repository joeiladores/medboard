@extends($layout, ['title' => $title])
@section('content')

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
                                                            <label for="lastname" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="firstname" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="midname" class="form-label">Middle Name</label>
                                                            <input type="text" class="form-control" id="midname" name="midname" placeholder="optional">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="marital_status" class="form-label">Marital Status</label>
                                                            <select id="marital_status" name="marital_status" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="single">single</option>
                                                                <option value="married">married</option>
                                                                <option value="widowed">widowed</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="bith_date" class="form-label">Birth Date</label>
                                                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select id="gender" name="gender" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="blood_type" class="form-label">Blood Type</label>
                                                            <select id="blood_type" name="blood_type" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address" name="address" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="phone" class="form-label">Phone</label>
                                                            <input type="number" class="form-control" id="phone" name="phone" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="health_insurance" class="form-label">Health Insurance</label>
                                                            <input type="text" class="form-control" id="health_insurance" name="health_insurance" placeholder="optional">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="relative_fullname" class="form-label">Relative Full Name</label>
                                                            <input type="text" class="form-control" id="relative_fullname" name="relative_fullname" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="relation" class="form-label">Relation to patient</label>
                                                            <input type="text" class="form-control" id="relation" name="relation" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="relative_phone" class="form-label">Relative Contact</label>
                                                            <input type="number" class="form-control" id="relative_phone" name="relative_phone" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary m-2" style="background-color:rgb(66,100,208);float:right">Add Patient</button>
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
                        <th>----</th>
                        <th>Admission</th>
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
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4 fs-4">Patient ID :</div>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control fs-5" id="createMed_patient_id" name="patient_id" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <span class="fs-4">Patient Name : </span>
                                                                <span class="fs-4" id="medhistory_patient_lastname"></span>
                                                                <span class="fs-4" id="medhistory_patient_firstname"></span>
                                                                <span class="fs-4" id="medhistory_patient_midname"></span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-3">
                                                            <label for="date" class="form-label">Date</label>
                                                            <input type="date" class="form-control" id="date" name="date" required>
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
                        <td>######</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info px-3" onclick="showAdmitModal({{ $patient->id }})">
                                Admit
                            </button>

                            <!-- Create Admit Modal -->
                            <div class="modal fade" id="createAdmitModal" tabindex="-1" aria-labelledby="createAdmitModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title text-dark" id="createAdmitModal">Create Patient's Admission</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <form method="POST" action="{{ route('storeAdmit') }}">
                                                    @csrf
                                                    <div class="row g-3 p-3">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-md-5 fs-4">
                                                                            Patient ID :
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <input type="number" class="form-control fs-5" id="admit_patient_id" name="patient_id" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-11">
                                                                    <span class="fs-4">Patient Name : </span>
                                                                    <span class="fs-4" id="admit_patient_lastname"></span>
                                                                    <span class="fs-4" id="admit_patient_firstname"></span>
                                                                    <span class="fs-4" id="admit_patient_midname"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-2">
                                                            <label for="age" class="form-label">Age</label>
                                                            <input type="number" class="form-control" id="age" name="age" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="weight" class="form-label">Weight (kg)</label>
                                                            <input type="number" class="form-control" id="weight" name="weight" step="any" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="bed_id" class="form-label">Available Rooms</label>
                                                            <select id="bed_id" name="bed_id" class="form-select" required>
                                                                @foreach($beds as $bed)
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="{{ $bed->id}}">{{ ($bed->room).'   '.($bed->room_type) }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="type" class="form-label" class="form-label">Patient Care</label>
                                                            <select id="type" name="type" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Inpatient">Inpatient</option>
                                                                <option value="Outpatient">Outpatient</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="admitting_doctor_id" class="form-label">Admitting Doctor :</label>
                                                            <select id="admitting_doctor_id" name="admitting_doctor_id" class="form-select">
                                                                <option disabled hidden selected>--- ---</option>
                                                                @foreach ($doctors as $doctor)
                                                                <option value="{{ $doctor->id }}">Dr. {{ $doctor->lastname }} {{ $doctor->firstname }} {{ $doctor->middlename }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="complain" class="form-label">Complain</label>
                                                            <input type="text" class="form-control" id="complain" name="complain" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="impression_diagnosis">Impression diagnosis</label>
                                                            <input type="text" class="form-control" id="impression_diagnosis" name="impression_diagnosis" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="mental_status" class="form-label">Mental status</label>
                                                            <select id="mental_status" name="mental_status" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Conscious">Conscious</option>
                                                                <option value="Drowsy">Drowsy</option>
                                                                <option value="Stupor">Stupor</option>
                                                                <option value="Unconscious">Unconscious</option>
                                                                <option value="Comatose">Comatose</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="activities" class="form-label">Activities</label>
                                                            <select id="activities" name="activities" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Ambulant">Ambulant</option>
                                                                <option value="Dangle & sit up">Dangle & sit up</option>
                                                                <option value="Bedrest w/ BRP">Bedrest w/ BRP</option>
                                                                <option value="CBR w/o BRP">CBR w/o BRP</option>
                                                                <option value="Comatose">Comatose</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="diet" class="form-label">Diet</label>
                                                            <select id="diet" name="diet" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="NPO">NPO</option>
                                                                <option value="DAT">DAT</option>
                                                                <option value="Soft">Soft</option>
                                                                <option value="Clear liquids">Clear liquids</option>
                                                                <option value="Gen. liquids">Gen. liquids</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="tubes" class="form-label">Tubes</label>
                                                            <select id="tubes" name="tubes" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Foley catheter">Foley catheter</option>
                                                                <option value="Thoractic tube">Thoractic tube</option>
                                                                <option value="NGT">NGT</option>
                                                                <option value="CVP">CVP</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="special_info" class="form-label">Special Info</label>
                                                            <select id="special_info" name="special_info" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Weigh daily">Weigh daily</option>
                                                                <option value="BP Qshift">BP Qshift</option>
                                                                <option value="Neuro VS">Neuro VS</option>
                                                                <option value="Abdominal girth">Abdominal girth</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="primary_doctor_id" class="form-label">Primary Doctor :</label>
                                                            <select id="primary_doctor_id" name="primary_doctor_id" class="form-select">
                                                                <option disabled hidden selected>--- ---</option>
                                                                @foreach ($doctors as $doctor)
                                                                <option value="{{ $doctor->id }}">Dr. {{ $doctor->lastname }} {{ $doctor->firstname }} {{ $doctor->middlename }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select id="status" name="status" class="form-select" required>
                                                                <option disabled hidden selected>--- ---</option>
                                                                <option value="Admitted">Admitted</option>
                                                                <option value="Discharged">Discharged</option>
                                                            </select>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary" style="background-color:rgb(66,100,208);float:right">Admit patient</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="d-flex">
                            <!-- Edit Patient Modal Button -->
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" onclick="showEditPatientModal({{ $patient->id }})">
                                    <i class="fa-sharp fa-solid fa-pen-to-square"></i>
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
                                                                <label for="editpatient_lastname" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" id="editpatient_lastname" name="lastname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="editpatient_firstname" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" id="editpatient_firstname" name="firstname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="editpatient_midname" class="form-label">Middle Name</label>
                                                                <input type="text" class="form-control" id="editpatient_midname" name="midname">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_marital_status" class="form-label">Marital Status</label>
                                                                <select id="editpatient_marital_status" name="marital_status" class="form-select" required>
                                                                    <option selected value="{{ $patient->marital_status }}">{{$patient->marital_status }}</option>
                                                                    <option value="single">single</option>
                                                                    <option value="married">married</option>
                                                                    <option value="widowed">widowed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_birth_date" class="form-label">Birth Date</label>
                                                                <input type="date" class="form-control" id="editpatient_birth_date" name="birth_date" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_gender" class="form-label">Gender</label>
                                                                <select id="editpatient_gender" name="gender" class="form-select" required>
                                                                    <option selected value="{{ $patient->gender }}">{{ $patient->gender }}</option>
                                                                    <option value="male">male</option>
                                                                    <option value="female">female</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_blood_type" class="form-label">Blood Type</label>
                                                                <select id="editpatient_blood_type" name="blood_type" class="form-select" required>
                                                                    <option selected value="{{ $patient->blood_type }}">{{ $patient->blood_type }}</option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="AB">AB</option>
                                                                    <option value="O">O</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="editpatient_address" class="form-label">Address</label>
                                                                <input type="text" class="form-control" id="editpatient_address" name="address" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" id="editpatient_phone" name="phone" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="editpatient_health_insurance" class="form-label">Health Insurance</label>
                                                                <input type="text" class="form-control" id="editpatient_health_insurance" name="health_insurance">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="editpatient_relative_fullname" class="form-label">Relative Full Name</label>
                                                                <input type="text" class="form-control" id="editpatient_relative_fullname" name="relative_fullname" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="editpatient_relation" class="form-label">Relation to patient</label>
                                                                <input type="text" class="form-control" id="editpatient_relation" name="relation" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="editpatient_relative_phone" class="form-label">Relative Phone</label>
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
                            <!-- Delete Patient -->
                            <a href="{{ route('destroyPatient', $patient->id) }}" class="btn btn-sm btn-danger text-light me-1"><i class="fa-solid fa-trash-can"></i></a>
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

@endsection
