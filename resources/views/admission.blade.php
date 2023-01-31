<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="{{ URL::asset('js/sb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/Bootstrap_dataTables.min.css') }}">

    <title>admission form</title>
    <style>
    #logo {
        height: 100px;
        width: 100px;
    }

    .brand {
        padding: 10px 50px 50px 50px;
        display: flex;
        flex-wrap: wrap;
        background: linear-gradient(to top, #89A5FF, #ECEFFA);
        height: 160px;

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
                <img src="{{asset('image/logo.png')}}">
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
                        <i class="fa fa-bars"></i>
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
                                <table class="table table-bordered data-table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Admitted</th>
                                            <th>Complain</th>
                                            <th>Impression Diagnosis</th>
                                            <th>Age</th>
                                            <th>Weight</th>
                                            <th>Activities</th>
                                            <th>Diet</th>
                                            <th>Tubes</th>
                                            <th>Special Info</th>
                                            <th>Date Discharge</th>
                                            <th>Status</th>
                                            <th>Created At:</th>
                                            <th>Updated At:</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admissions as $admission)
                                        <tr>
                                            <td>{{ $admission->date_time_admitted }}</td>
                                            <td>{{ $admission->complain }}</td>
                                            <td>{{ $admission->impression_diagnosis }}</td>
                                            <td>{{ $admission->age }}</td>
                                            <td>{{ $admission->weight }}</td>
                                            <td>{{ $admission->activities }}</td>
                                            <td>{{ $admission->diet }}</td>
                                            <td>{{ $admission->tubes }}</td>
                                            <td>{{ $admission->special_info }}</td>
                                            <td>{{ $admission->date_time_discharge }}</td>
                                            <td>{{ $admission->status }}</td>
                                            <td>{{ $admission->created_at }}</td>
                                            <td>{{ $admission->updated_at }}</td>
                                            <td>{{ $admission->Actions}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfooter>
                                        <tr>
                                            <th>Admitted</th>
                                            <th>Complain</th>
                                            <th>Impression Diagnosis</th>
                                            <th>Age</th>
                                            <th>Weight</th>
                                            <th>Activities</th>
                                            <th>Diet</th>
                                            <th>Tubes</th>
                                            <th>Special Info</th>
                                            <th>Date Discharge</th>
                                            <th>Status</th>
                                            <th>Created At:</th>
                                            <th>Updated At:</th>
                                            <th>Action</th>
                                        </tr>

                                    </tfooter>
                                    <a class="btn btn-success" href="javascript:void(0)" id="createNewAdmission">ADD</a>
                                </table>
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

    <!-- Logout Modal copy from bootsrap change needed / use laravel ui logout and dashboard settings-->
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
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/sb.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('datatables/mydatatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('datatables/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('datatables/mytables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/datatables/mytables.responsive.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>

    <script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $(".data-table").DataTable({
            serverSide: true,
            processing: true,
            ajax: "{{route('admission.index')}}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'date_time_admitted',
                    name: 'admitted'
                },
                {
                    data: 'complain',
                    name: 'complain'
                },
                {
                    data: 'impression_diagnosis',
                    name: 'impression diagnosis'
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
                    data: 'special_info',
                    name: 'special_info'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'date_time_discharge',
                    name: 'Date Time Discharge'
                },
                {
                    data: 'created_at',
                    name: 'created at'
                },

                {
                    data: 'updated_at',
                    name: 'updated at'
                },

                {
                    data: 'actions',
                    name: 'actions'
                },
            ]
        });


    });
    </script>
    <!-- <script>
    var editor; // use a global for the submit and return data rendering in the examples -->

    // $(document).ready(function() {
    //     editor = new $.fn.dataTable.Editor({
    //         ajax: "../../controllers/staff.php",
    //         table: ".data-table",
    //         fields: [ {
    //                 data: 'date_time_admitted',
    //                 name: 'admitted'
    //             },
    //             {
    //                 data: 'complain',
    //                 name: 'complain'
    //             },
    //             {
    //                 data: 'impression_diagnosis',
    //                 name: 'impression diagnosis'
    //             },
    //             {
    //                 data: 'age',
    //                 name: 'age'
    //             },
    //             {
    //                 data: 'weight',
    //                 name: 'weight'
    //             },
    //             {
    //                 data: 'activities',
    //                 name: 'activities'
    //             },
    //             {
    //                 data: 'diet',
    //                 name: 'diet'
    //             },

    //             {
    //                 data: 'tubes',
    //                 name: 'tubes'
    //             },
    //             {
    //                 data: 'special_info',
    //                 name: 'special_info'
    //             },
    //             {
    //                 data: 'status',
    //                 name: 'status'
    //             },
    //             {
    //                 data: 'date_time_discharge',
    //                 name: 'Date Time Discharge'
    //             },
    //             {
    //                 data: 'created_at',
    //                 name: 'created at'
    //             },

    //             {
    //                 data: 'updated_at',
    //                 name: 'updated at'
    //             },

    //             {
    //                 data: 'actions',
    //                 name: 'actions'
    //             },]
    //     });

    //     // Activate an inline edit on click of a table cell
    //     $('.data-table').on('click', 'tbody td:not(:first-child)', function(e) {
    //         editor.inline(this);
    //     });

    //     $('.data-table').DataTable({
    //         dom: "Bfrtip",
    //         ajax: "../../controllers/staff.php",
    //         order: [
    //             [1, 'asc']
    //         ],
    //         columns: [{
    //                 data: null,
    //                 defaultContent: '',
    //                 className: 'select-checkbox',
    //                 orderable: false
    //             },
    //             {
    //                 data: 'date_time_admitted',
    //                 name: 'admitted'
    //             },
    //             {
    //                 data: 'complain',
    //                 name: 'complain'
    //             },
    //             {
    //                 data: 'impression_diagnosis',
    //                 name: 'impression diagnosis'
    //             },
    //             {
    //                 data: 'age',
    //                 name: 'age'
    //             },
    //             {
    //                 data: 'weight',
    //                 name: 'weight'
    //             },
    //             {
    //                 data: 'activities',
    //                 name: 'activities'
    //             },
    //             {
    //                 data: 'diet',
    //                 name: 'diet'
    //             },

    //             {
    //                 data: 'tubes',
    //                 name: 'tubes'
    //             },
    //             {
    //                 data: 'special_info',
    //                 name: 'special_info'
    //             },
    //             {
    //                 data: 'status',
    //                 name: 'status'
    //             },
    //             {
    //                 data: 'date_time_discharge',
    //                 name: 'Date Time Discharge'
    //             },
    //             {
    //                 data: 'created_at',
    //                 name: 'created at'
    //             },

    //             {
    //                 data: 'updated_at',
    //                 name: 'updated at'
    //             },

    //             {
    //                 data: 'actions',
    //                 name: 'actions'
    //             },
    //         ],
    //         select: {
    //             style: 'os',
    //             selector: 'td:first-child'
    //         },
    //         buttons: [{
    //                 extend: "create",
    //                 editor: editor
    //             },
    //             {
    //                 extend: "edit",
    //                 editor: editor
    //             },
    //             {
    //                 extend: "remove",
    //                 editor: editor
    //             }
    //         ]
    //     });
    // });
    // </script>
</body>

</html>