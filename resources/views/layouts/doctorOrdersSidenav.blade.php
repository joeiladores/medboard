<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/892c818641.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/1065528823027867648/1067448961801134140/logo.png">
  </head>
<body>
    <div id="orders">
    <div class="container-fluid p-1 pt-0">
        <div class="row">
            <div class="col-auto sticky" style="background: linear-gradient(180deg, rgba(66, 100, 208, 0.26) 1.56%, #4264D0 36.46%);
box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.25);
border-radius: 0px 44px 32px 0px;">
                <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky"
                    style="">
                    <a href="index.html" class="navbar-brand ml-4">
                        <img id="logo" style="width:100px; height:100px;" src="https://cdn.discordapp.com/attachments/1065528823027867648/1067448961801134140/logo.png" alt="Medboard Logo">
                    </a>
                    <ul
                        class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                        <li id="navIcons" class="nav-item">
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="" style="color:black" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li id="navIcons" class="nav-item">
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="" style="color:black" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li id="navIcons" class="nav-item">
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="" style="color:black" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="">
                                <i class="fa-solid fa-house fa-2x" style="color:white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Patients">
                                <i class="fa-solid fa-hospital-user fa-2x" style="color:white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Forms">
                                <i class="fa-solid fa-clipboard fa-2x" style="color:white" aria-hidden="true"></i>
                            </a>
</li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Calendar">
                                <i class="fa-regular fa-calendar-days fa-2x" style="color:white" aria-hidden="true"></i>
                            </a>
                        </li>
                        

                        <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Logout">
                                <i class="fa-solid fa-right-from-bracket fa-2x" style="color:white; padding-top:250%;" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            
            <div class="col-sm p-3 min-vh-100">
                <h2></h2>
                <div class="container-fluid">
 
</div>
     <!--CARD START -->
      <!-- <main class="py-4"> -->
            @yield('content')
        <!-- </main> -->

    </div>
            </div>
        </div>
    </div>
    </div>
    
    
    
</body>
</html>
