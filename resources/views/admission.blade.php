<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>admission form</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link
        nhref="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('js/sb.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('datatables/tables.css') }}"> -->
    <link rel="stylesheet" href="{{ URL::asset('noty/nest.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('noty/noty.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('noty/notification.js') }}">
    <link rel="stylesheet" href="{{ URL::asset('noty/noty.js') }}">
    <style>
    .logo {
        height: 70px;
        width: 80px;

    }

    .brand {
        padding: 10px 60px 60px 60px;
        display: flex;
        flex-wrap: wrap;
        background: linear-gradient(to top, #89A5FF, #ECEFFA);
        height: 100px;

    }

    h4 {
        font-weight: 600;
    }

    h5 {
        font-weight: bold;
        font-size: 14px;
        height: 100%;
        letter-spacing: 1px;


    }

    .nav-item {
        background-color: #4264d0;
        display: flex;
        height: none;
        padding-left: 1px;
        border-bottom: skyblue solid 0.1mm;




    }

    .navbar-nav {
        background: linear-gradient(to top, #033FFF, #1596FF);
        color: white;
    }

    .sidebar-divider {
        background-color: white;

    }

    .btn-nav {
        color: black;
    }

    .round-me {
        background-color: #E0EEF8;
        border-top: skyblue solid 1mm;
        border-radius: 50px;
        box-shadow: 2px 5px 5px 5px rgba(0, 0, 0, 0.5);

    }

    /**--------------main col area */


    .col {
        border: solid black;
    }

    .pagination {
        margin-left: 50px;
    }

    /***---modal area */
    table {

        height: 70px;
    }

    .modal-body {
        padding: 30px;

    }

    .form-group {
        margin-bottom: 25px;
    }

    label {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
        display: block;
    }

    input[type="text"],
    input[type="datetime-local"] {
        padding: 10px;
        font-size: 14px;
        width: 100%;
        box-sizing: border-box;
    }

    .modal-header {
        background-color: #f7f7f7;
        padding: 20px;
        border-bottom: 1px solid #e5e5e5;
    }

    .modal-title {
        font-size: 20px;
        font-weight: bold;
        margin: 0;
    }

    .modal-footer {
        background-color: #f7f7f7;
        padding: 20px;
        border-top: 1px solid #e5e5e5;
        text-align: right;
    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->



            <!-- Nav Item - Dashboard -->
            <li class="brand">
                <img class="logo" src="{{asset('image/logo.png')}}">
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span>
                        <h5 class="fa-solid fa-user-doctor"> 𝗨𝘀𝗲𝗿 𝗠𝗮𝗻𝗮𝗴𝗲𝗺𝗲𝗻𝘁</h5>
                    </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span>
                        <h5 class="fa-sharp fa-solid fa-booth-curtain"> 𝗥𝗼𝗼𝗺 𝗠𝗮𝗻𝗮𝗴𝗲𝗺𝗲𝗻𝘁</h5>
                    </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span>
                        <h6 class="fa-solid fa-notes-medical" style="font-size:12px;"> 𝗗𝗲𝗽𝗮𝗿𝘁𝗺𝗲𝗻𝘁
                            𝗠𝗮𝗻𝗮𝗴𝗲𝗺𝗲𝗻𝘁</h6>
                    </span></a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link" href="index.html">
                    <span>
                        <h6 class="fa-solid fa-bed-pulse" style="font-size:13px;"> 𝗣𝗮𝘁𝗶𝗲𝗻𝘁 𝗠𝗮𝗻𝗮𝗴𝗲𝗺𝗲𝗻𝘁
                        </h6>
                    </span></a>
            </li>
            <li class="nav-item round-me m-2">
                <a class="nav-link" href="index.html">
                    <span>
                        <h5 class="btn-nav">Add Patient</h5>
                    </span></a>
            </li>
            <li class="nav-item round-me m-3">
                <a class="nav-link" href="index.html">
                    <span>
                        <h5 class="btn-nav">Admit Patient</h5>
                    </span></a>
            </li>
            <!-- Divider -->




            <!-- Sidebar Toggler (Sidebar) -->

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa-duotone fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>



                            <!-- Dropdown - -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class=" dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline color black">Jomar Neri</span>
                                <img class="img-profile rounded-circle" style="height: 32px; width: 32px;"
                                    src="https://thumbs.dreamstime.com/z/unknown-male-avatar-profile-image-businessman-vector-unknown-male-avatar-profile-image-businessman-vector-profile-179373829.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Medboard Sample Tables</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">MYSQL DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <div class="col-md-12">
                                    <table class="table hover stripe display compact table-bordered data-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th width="280px">Action</th>
                                                <th>Admitted</th>
                                                <th>Complain</th>
                                                <th>Impression Diagnosis</th>
                                                <th>age</th>
                                                <th>Weight</th>
                                                <th>Activities</th>
                                                <th>Diets</th>
                                                <th>Tubes</th>
                                                <th>Special Info</th>
                                                <th>Status</th>
                                                <th>Date Time Discharge</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----patient table------>
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Patient Table</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">MYSQL DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="col-md-12">
                                <table class="  hover stripe display compact patient-table">
                                    <button id="button">Admit Patient</button>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Last Name</th>
                                            <th>First name</th>
                                            <th>birth_date</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span> MedBoard @ 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!--________________________________________________
        |          Logout Modal copy from bootsrap change needed
        |         use laravel ui logout and dashboard settings
        |____________________________________________________
    -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!--________________________________________________
        |
        |
        |
        |          This is where Modal Form created
        |          
        |
        |
        |_______________________________________________
    -->
    <div class="modal fade" id="ajaxModel" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="admissionForm" name="admissionForm" class="form-horizontal">
                        <input type="hidden" name="admission_id" id="admission_id">
                        <div class="form-group">
                            <label for="admitted" class="col-sm-2 control-label">admitted</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="admitted" name="admitted"
                                    placeholder="Enter admitted" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="complain" class="col-sm-2 control-label">Complain</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="complain" name="complain"
                                    placeholder="Enter complain" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="impression diagnosis" class="col-sm-2 control-label">Impression
                                Diagnosis</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="diagnosis" name="diagnosis"
                                    placeholder="Details.." value="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">Age</label>
                            <div class="col-sm-12">
                                <input type="integer" class="form-control" id="age" name="age" placeholder="age"
                                    value="" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="weight" class="col-sm-2 control-label">weight</label>
                            <div class="col-sm-12">
                                <input type="integer" class="form-control" id="weight" name="weight" value=""
                                    required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="activities" class="col-sm-2 control-label">Activities</label>
                            <div class="col-sm-12">
                                <select size="1" id="activities" name="activities">
                                    <option value="Ambulant">
                                        Ambulant
                                    </option>
                                    <option value="Dangle and sit up">
                                        Dangle and sit up
                                    </option>
                                    <option value="Bedrest with BRP">
                                        New York
                                    </option>
                                    <option value="CBR w/o BRP">
                                        CBR w/o BRP
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="diet" class="col-sm-2 control-label">diet</label>
                            <div class="col-sm-12">
                                <select size="1" id="diet" name="diet">
                                    <option value="NPO" >
                                    NPO
                                    </option>
                                    <option value="dat">
                                    Dat
                                    <option value="soft">
                                    Soft
                                    </option>
                                    <option value="clearLiquids">
                                    Clear Liquids
                                    </option>
                                    <option value="genliquids">
                                    Gen. liquids
                                    </option>
                                    <option value="lslfnpo">
                                    LSLF then NPO
                                    </option>
                                    <option value="tidPremeals">
                                    tID Pre-meals
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="tubes" class="col-sm-2 control-label">Tubes</label>
                            <div class="col-sm-12">
                                    <select size="1" id="tubes" name="tubes">
                                    <option value="foleyCatheter" >
                                    Foley Catheter
                                    </option>
                                    <option value="thoracicTube">
                                    Thoracic Tube
                                    <option value="ngt">
                                    NGT
                                    </option>
                                    <option value="cvp">
                                    CVP
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="specialinfo" class="col-sm-2 control-label">Special Info</label>
                            <div class="col-sm-12">
                                    <select size="1" id="specialinfo" name="specialinfo">
                                    <option value="weightDaily" >
                                    Weight Daily
                                    </option>
                                    <option value="bpqshift">
                                    Bp Q shift
                                    <option value="neuroVS">
                                    Neuro VS
                                    </option>
                                    <option value="abdominalGirth">
                                    Abdominal Girth
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mentalStatus" class="col-sm-2 control-label">Mental Status</label>
                            <div class="col-sm-12">
                                    <select size="1" id="mentalStatus" name="mentalStatus">
                                    <option value="conscious" >
                                    Conscious
                                    </option>
                                    <option value="drowsy" >
                                    Drowsy
                                    </option>
                                    <option value="stupor" >
                                    Stupor
                                    </option>
                                    <option value="unconscious" >
                                    Unconscious
                                    </option>
                                    <option value="comatose" >
                                    Comatose
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-12">
                                    <select size="1" id="status" name="status">
                                    <option value="Admitted" >
                                    Admitted
                                    </option>
                                    <option value="Discharged" >
                                    Discharged
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date_time_discharged" class="col-sm-2 control-label">Date and Time Discharge</label>
                            <div class="col-sm-12 " disabled>
                                <input type="date" class="form-control" id="date_time_discharged" name="date_time_discharged" required="">
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/sb.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('datatables/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*------------------------------------------
        --------------------------------------------
        Render DataTable
        --------------------------------------------
        --------------------------------------------*/



        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajaxadmissions.index') }}",
            columns: [
                // {
                //     data: 'primary_doctor_id',
                //     name: 'primary_doctor_id',
                // },
                // {
                //     data: 'bed_id',
                //     name: 'bed_id'
                // },
                // {
                //     data: 'patient_id',
                //     name: 'patient_id'
                // },
                // {
                //     data: 'user_id',
                //     name: 'user_id'
                // },
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'admitted',
                    name: 'admitted'
                },
                {
                    data: 'complain',
                    name: 'complain'
                },
                {
                    data: 'diagnosis',
                    name: 'diagnosis'
                },
                {
                    data: 'age',
                    name: 'age'
                },
                {
                    data: 'weight',
                    name: 'weight'
                },
                {
                    data: 'activities',
                    name: 'activities'
                },
                {
                    data: 'diet',
                    name: 'diet'
                },
                {
                    data: 'tubes',
                    name: 'tubes'
                },
                {
                    data: 'specialinfo',
                    name: 'specialinfo'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'date_time_discharged',
                    name: 'date_time_discharged'
                },

            ]
        });


        /*------------------------------------------
        --------------------------------------------
        Render Patient DataTable
        --------------------------------------------
        --------------------------------------------*/

        var table = $('.patient-table').DataTable({
            ajax: "{{ route('patientAdmission.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'lastname',
                    name: 'lastname'
                },
                {
                    data: 'firstname',
                    name: 'firsttname'
                },
                {
                    data: 'birth_date',
                    name: 'birth_date'
                },

                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'address',
                    name: 'address'
                },
            ]
        });
        $('.patient-table tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
        $('#button').click(function() {
            var selectedRow = table.row('.selected');
            if (!selectedRow.data() || !selectedRow.data().id) {
                alert("The selected row does not have an 'id' from the database.");
                return;
            }
            $('#saveBtn').val("create-admission");
            $('#admission_id').val('');
            $('#admissionForm').trigger("reset");
            $('#modelHeading').html("Create New Admission");
            $('#ajaxModel').modal('show');
        });

        $('#saveBtn').click(function(e) {
            e.preventDefault();
            // send a request to the server to get the next available admission ID
            $.ajax({
                type: "GET",
                url: "/next-admission-id",
                success: function(data) {
                    var admissionID = data.id;
                    var admissionExists = false;
                    // check if the table has an "id" column
                    if (!table.column('id').visible()) {
                        // return error message
                        alert("The selected table does not have an 'id' column.");
                        return;
                    }
                    // check if the admission ID already exists in the table
                    table.rows().every(function() {
                        if (this.data()[0] === admissionID) {
                            admissionExists = true;
                            return false; // exit the loop
                        }
                    });
                    if (admissionExists) {
                        // return error message
                        alert("Admission ID already exists!");
                        return;
                    }
                    // add the admission ID to the form data
                    $('#admission_id').val(admissionID);

                },
                error: function(data) {
                    // handle the error
                    console.error("Failed to get next admission ID", data);
                }
            });
        });


        $('body').on('click', '.editAdmission', function() {
            var admission_id = $(this).data('id');
            $.get("{{ route('ajaxadmissions.index') }}" + '/' + admission_id + '/edit', function(data) {
                $('#modelHeading').html("Edit admission");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#admission_id').val(data.id);
                $('#admitted').val(data.admitted);
                $('#complain').val(data.complain);
                $('#diagnosis').val(data.diagnosis);
                $('#age').val(data.age);
                $('#weight').val(data.weight);
                $('#activities').val(data.activities);
                $('#diet').val(data.diet);
                $('#tubes').val(data.tubes);
                $('#specialinfo').val(data.specialinfo);
                $('#status').val(data.status);
                $('#discharge').val(data.discharge);
            })
        });
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
                data: $('#admissionForm').serialize(),
                url: "{{ route('ajaxadmissions.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#admissionForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function(data) {
                    errorNotification("Error")
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
        $('body').on('click', '.deleteAdmission', function() {
            var admission_id = $(this).data("id");
            var result = confirm("Are You sure want to delete !");
            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('ajaxadmissions.store') }}" + '/' + admission_id,
                    success: function(data) {
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                return false;
            }
        });
    });
    </script>

</html>