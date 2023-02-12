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

    <!-- TABS -->
    <div class="m-3">
        <button class="tablink btn border px-4" onclick="openPage('AdmittedList', this, 'rgb(66,100,208)')" id="defaultOpen">Admitted Patients</button>
        <button class="tablink btn border px-4" onclick="openPage('Medication', this, 'rgb(66,100,208)')">ALL</button>
    </div>

    <div id="AdmittedList" class="tabcontent">
        <table class="table table-hover" id="admittedTable">
            <thead>
                <tr>
                    <th>Patients ID#</th>
                    <th>Patients Full Name</th>
                    <th>Admitting Doctor</th>
                    <th>Room #</th>
                    <th>Type of care</th>
                    <th>Primary Doctor</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admittedinfo as $admitpatient)
                <tr>
                    <td>{{ $admitpatient->id }}</td>
                    <td>{{ $admitpatient->patient_id }} {{ $admitpatient->p_lastname }}, {{ $admitpatient->p_firstname }} {{ $admitpatient->p_midname }}</td>

                    <td>Dr. {{ $admitpatient->ad_lastname }}, {{ $admitpatient->ad_firstname }} {{ $admitpatient->ad_middlename }}</td>
                    <td>{{ $admitpatient->room }}</td>
                    <td>{{ $admitpatient->type }}</td>
                    <td>Dr. {{ $admitpatient->pd_lastname }}, {{ $admitpatient->pd_firstname }} {{ $admitpatient->pd_middlename }}</td>
                    <td>{{ $admitpatient->status }}</td>
                    <td>

                        <!-- Edit Admission Button -->
                        <button type="button" class="btn btn-sm btn-primary" onclick="showEditAdmitModal({{ $admitpatient->id }})">
                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                        </button>

                        <!-- Delete Admission -->
                        <a href="{{ route('destroyAdmitted', $admitpatient->id) }}" class="btn btn-sm btn-danger text-light me-1"><i class="fa-solid fa-trash-can"></i></a>

                        <!-- Edit Admission Modal-->
                        <div class="modal fade" id="editAdmissionModal" tabindex="-1" aria-labelledby="editAdmissionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title text-light" id="editAdmission">Edit Admit Patient</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <form method="POST" action="{{ route('updateAdmission') }}">
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
                                                                        <input type="number" class="form-control fs-5"  id="edit_patient" name="patient_id" value="{{ $admitpatient->patient_id }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-11">
                                                                <span class="fs-4">Patient Name : </span>
                                                                <span class="fs-4" id="admit_patient_lastname" value="{{ $admitpatient->p_lastname }}">{{ $admitpatient->p_lastname }}</span>
                                                                <span class="fs-4" id="admit_patient_firstname" value="{{ $admitpatient->p_firstname }}">{{ $admitpatient->p_firstname }}</span>
                                                                <span class="fs-4" id="admit_patient_midname" value="{{ $admitpatient->p_midname }}">{{ $admitpatient->p_midname }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-2">
                                                        <label for="edit_age" class="form-label">Age</label>
                                                        <input type="number" class="form-control" id="edit_age" name="age" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="edit_weight" class="form-label">Weight (kg)</label>
                                                        <input type="number" class="form-control" id="edit_weight" name="weight" step="any" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="edit_bed_id" class="form-label">Available Rooms</label>
                                                        <select id="edit_bed_id" name="bed_id" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->room }}">{{ $admitpatient->room }}</option>
                                                            @foreach($beds as $bed)
                                                            <option value="{{ $bed->id }}">{{ ($bed->room).'   '.($bed->room_type) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="edit_type" class="form-label" class="form-label">Patient Care</label>
                                                        <select id="edit_type" name="type" class="form-select" required>
                                                            <option value="{{ $admitpatient->type }}" selected>{{ $admitpatient->type }}</option>
                                                            <option value="Inpatient">Inpatient</option>
                                                            <option value="Outpatient">Outpatient</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_admitting_doctor_id" class="form-label">Admitting Doctor :</label>
                                                        <select id="edit_admitting_doctor_id" name="admitting_doctor_id" class="form-select">
                                                            <option selected value="{{ $admitpatient->ad_lastname }} {{ $admitpatient->ad_firstname }} {{ $admitpatient->ad_middlename }}">Dr. {{ $admitpatient->ad_lastname }} {{ $admitpatient->ad_firstname }}
                                                            {{ $admitpatient->ad_middlename }}
                                                            </option>
                                                            @foreach ($doctors as $doctor)
                                                            <option value="{{ $doctor->id }}">Dr. {{ $doctor->lastname }} {{ $doctor->firstname }} {{ $doctor->midname }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="edit_complain" class="form-label">Complain</label>
                                                        <input type="text" class="form-control" id="edit_complain" name="complain" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="edit_impression_diagnosis">Impression diagnosis</label>
                                                        <input type="text" class="form-control" id="edit_impression_diagnosis" name="impression_diagnosis" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_mental_status" class="form-label">Mental status</label>
                                                        <select id="edit_mental_status" name="mental_status" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->mental_status }}">{{ $admitpatient->mental_status }}</option>
                                                            <option value="Conscious">Conscious</option>
                                                            <option value="Drowsy">Drowsy</option>
                                                            <option value="Stupor">Stupor</option>
                                                            <option value="Unconscious">Unconscious</option>
                                                            <option value="Comatose">Comatose</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_activities" class="form-label">Activities</label>
                                                        <select id="edit_activities" name="activities" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->activities }}">{{ $admitpatient->activities }}</option>
                                                            <option value="Ambulant">Ambulant</option>
                                                            <option value="Dangle & sit up">Dangle & sit up</option>
                                                            <option value="Bedrest w/ BRP">Bedrest w/ BRP</option>
                                                            <option value="CBR w/o BRP">CBR w/o BRP</option>
                                                            <option value="Comatose">Comatose</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_diet" class="form-label">Diet</label>
                                                        <select id="edit_diet" name="diet" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->diet }}">{{ $admitpatient->diet }}</option>
                                                            <option value="NPO">NPO</option>
                                                            <option value="DAT">DAT</option>
                                                            <option value="Soft">Soft</option>
                                                            <option value="Clear liquids">Clear liquids</option>
                                                            <option value="Gen. liquids">Gen. liquids</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_tubes" class="form-label">Tubes</label>
                                                        <select id="edit_tubes" name="tubes" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->tubes }}">{{ $admitpatient->tubes }}</option>
                                                            <option value="Foley catheter">Foley catheter</option>
                                                            <option value="Thoractic tube">Thoractic tube</option>
                                                            <option value="NGT">NGT</option>
                                                            <option value="CVP">CVP</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_special_info" class="form-label">Special Info</label>
                                                        <select id="edit_special_info" name="special_info" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->special_info }}">{{ $admitpatient->special_info }}</option>
                                                            <option value="Weigh daily">Weigh daily</option>
                                                            <option value="BP Qshift">BP Qshift</option>
                                                            <option value="Neuro VS">Neuro VS</option>
                                                            <option value="Abdominal girth">Abdominal girth</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_primary_doctor_id" class="form-label">Primary Doctor :</label>
                                                        <select id="edit_primary_doctor_id" name="primary_doctor_id" class="form-select">
                                                            <option selected value="{{ $admitpatient->pd_lastname }} {{ $admitpatient->pd_firstname }} {{ $admitpatient->pd_middlename }}">Dr. {{ $admitpatient->pd_lastname }} {{ $admitpatient->pd_firstname }} {{ $admitpatient->pd_middlename }}</option>
                                                            @foreach ($doctors as $doctor)
                                                            <option value="{{ $doctor->id }}">Dr. {{ $doctor->lastname }} {{ $doctor->firstname }} {{ $doctor->middlename }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit_status" class="form-label">Status</label>
                                                        <select id="edit_status" name="status" class="form-select" required>
                                                            <option selected value="{{ $admitpatient->status }}">{{ $admitpatient->status }}</option>
                                                            <option value="Admitted">Admitted</option>
                                                            <option value="Discharged">Discharged</option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="id" id="edit_admitpatient_id">
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

        <div id="Medication" class="tabcontent mt-4">
            <table class="table" id="medicationTable">
                <thead>
                    <tr>
                        <th>Medication</th>
                        <th>Quantity</th>
                        <th>Dosage</th>
                        <th>Unit</th>
                        <th>Frequency</th>
                        <th>Instructions</th>
                        <th>Date Start</th>
                        <th>Date Stop</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex">
                            <!-- <button class="btn btn-sm btn-danger text-light me-1 fa-sharp fa-solid fa-trash" id="" onClick="reply_click_medication(this.id)"></button>
                            <a href="" class="btn btn-sm text-light fa-sharp fa-solid fa-pen-to-square" style="background-color:rgb(66,100,208);"></a> -->
                        </td>
                        <!-- To trigger the sweet alert (per ID) -->
                        <!-- <script type="text/javascript">
                            function reply_click_medication(clicked_id) {
                                Swal.fire({
                                    title: 'Delete Medication Record?',
                                    text: "You won't be able to revert this!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: 'rgb(66,100,208)',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Confirm'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "{{ route('destroyMedication', '') }}" + "/" + clicked_id;
                                        Swal.fire({
                                            title: 'Deleted!',
                                            text: 'Medication Record has been deleted.',
                                            icon: 'success',
                                            showConfirmButton: false
                                        });
                                    }
                                });
                            }
                        </script> -->
                    </tr>
 
                </tbody>
            </table>
        </div>

    </div>
</div>


<!--Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- For DataTables -->
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
</script>

<script>
    var dataTable = new DataTable("#admittedTable");
    var dataTable = new DataTable("#medicationTable");

    //  Edit Admission Patient
    const editAdmissionModal = new bootstrap.Modal('#editAdmissionModal', {
        keyboard: false
    });

    function showEditAdmitModal(admission_news_id) {
        fetch('{{ url('/showAdmission/') }}/' + admission_news_id)
            .then(response => response.json())
            .then(data => {
                document.getElementById('edit_patient').value = data.patient_id;
                document.getElementById('edit_age').value = data.age;
                document.getElementById('edit_weight').value = data.weight;
                // document.getElementById('edit_bed_id').value = data.bed_id;
                document.getElementById('edit_type').value = data.type;
                // document.getElementById('edit_admitting_doctor_id').value = data.admitting_doctor_id;
                document.getElementById('edit_complain').value = data.complain;
                document.getElementById('edit_impression_diagnosis').value = data.impression_diagnosis;
                document.getElementById('edit_mental_status').value = data.mental_status;
                document.getElementById('edit_activities').value = data.activities;
                document.getElementById('edit_diet').value = data.diet;
                document.getElementById('edit_tubes').value = data.tubes;
                document.getElementById('edit_special_info').value = data.special_info;
                // document.getElementById('edit_primary_doctor_id').value = data.primary_doctor_id;
                document.getElementById('edit_status').value = data.status;
                document.getElementById('edit_admitpatient_id').value = data.id;

                editAdmissionModal.show();
            })
    }
</script>

<script>
    // For Tabs
    function openPage(pageName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }

        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


@include('profile.partials.footer')