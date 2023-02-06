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
   var dataTable = new DataTable("#patientTable");
   var dataTable = new DataTable("#pendingView");


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

   //  Edit Modal Patient
   const editPatientModal = new bootstrap.Modal('#editPatientModal', {
     keyboard: false
   });

   function showEditPatientModal(patient_id) {
     fetch('{{ url('/patients/') }}/' + patient_id)
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

   // Show Medical History Modal of specific Patient
   const patientMedHistoryModal = new bootstrap.Modal('#patientMedHistoryModal', {
     keyboard: false
   });

   function showMedHistoryModal(patient_id) {
     fetch('{{ url('/medhistory/') }}/' + patient_id)
       .then(response => response.json())
       .then(data => {
         document.getElementById('showpatientmed_date').innerHTML = data.date;
         document.getElementById('showpatientmed_conditions').innerHTML = data.conditions;
         document.getElementById('showpatientmed_symptoms').innerHTML = data.symptoms;
         document.getElementById('showpatientmed_medications').innerHTML = data.medications;
         document.getElementById('showpatientmed_allergies').innerHTML = data.allergies;
         document.getElementById('showpatientmed_bad_habit').innerHTML= data.bad_habit;
         document.getElementById('showpatientmed_id').innerHTML = data.id;
         patientMedHistoryModal.show();
       })
   }

  //  Create Medical History of a Patient
   const createMedHistoryModal = new bootstrap.Modal('#createMedHistoryModal',{
    keyboard: false
   });

   function showCreateMedHistoryModal(patient_id){
    fetch('{{ url('/medhistory/') }}/' + patient_id)
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