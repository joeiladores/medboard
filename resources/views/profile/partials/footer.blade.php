 <!-- Navbar Toggler -->
 <script>
   var el = document.getElementById("wrapper")
   var toggleButton = document.getElementById("menu-toggle")

   toggleButton.onclick = function() {
     el.classList.toggle("toggled")
   }
 </script>

 <!--Bootstrap JS-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

 <!-- ChartJS -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
 <script src="/chart.js"></script>

 <!-- For DataTables -->
 <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
 <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript">
 </script>

 <script>
   $(document).ready(function() {
     $('#patientTable').DataTable({
       "pageLength": 5,
       "lengthChange": true
     });
   });
 </script>

 <script>
   var dataTable = new DataTable("#patientTable");

   //  Edit Modal Patient
   const editPatientModal = new bootstrap.Modal('#editPatientModal', {
     keyboard: false
   });

   function showEditPatientModal(patient_id) {
     fetch('{{ url(' / patients / ') }}/' + patient_id)
       .then(response => response.json())
       .then(data => {
         document.getElementById('editpatient_lastname').value = data.lastname;
         document.getElementById('editpatient_firstname').value = data.firstname;
         document.getElementById('editpatient_midname').value = data.midname;
         document.getElementById('editpatient_marital_status').value = data.marital_status;
         document.getElementById('editpatient_birth_date').value = data.birth_date;
         document.getElementById('editpatient_gender').value = data.gender;
         document.getElementById('editpatient_blood_type').value = data.blood_type;
         document.getElementById('editpatient_address').value = data.address;
         document.getElementById('editpatient_phone').value = data.phone;
         document.getElementById('editpatient_health_insurance').value = data.health_insurance;
         document.getElementById('editpatient_relative_fullname').value = data.relative_fullname;
         document.getElementById('editpatient_relation').value = data.relation;
         document.getElementById('editpatient_relative_phone').value = data.relative_phone;
         document.getElementById('editpatient_id').value = data.id;
         editPatientModal.show();
       })
   }



   //  Create Medical History of a Patient
   const createMedHistoryModal = new bootstrap.Modal('#createMedHistoryModal', {
     keyboard: false
   });

   function showCreateMedHistoryModal(patient_id) {
     fetch('{{ url(' / medhistory / ') }}/' + patient_id)
       .then(response => response.json())
       .then(data => {
         document.getElementById('medhistory_patient_name').innerHTML = data.lastname;
         document.getElementById('createMed_patient_id').value = data.id;
         createMedHistoryModal.show();
       })
   }
 </script>

 </body>

 </html>