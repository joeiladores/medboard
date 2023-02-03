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
 </script>

 </body>

 </html>