<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">
</head>

<style>
.sidebar{
background: linear-gradient(180deg, rgba(66, 100, 208, 0.26) 1.56%, #4264D0 36.46%);
box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.25);
border-radius: 0px 44px 32px 0px;"
}


.logo-sidebar{
  max-width: 6rem;
  height: auto;
}


#wrapper{
  overflow-x: hidden;
}

#sidebar-wrapper{
  min-height: 100vh;
  margin-left: -15rem;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading{
  padding: 0.9rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group{
  width: 15rem;
}

#page-content-wrapper{
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper{
  margin-left: 0;
}

#menu-toggle,
#toggle-name{
  cursor: pointer;
  display:none;
}

.list-group-item{
  border: none;
  padding: 20px 30px;
}

.list-group-item.active{
  background-color: transparent;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}

/* Chart */
.graphBox{
  position: relative;
  width: 100%;
  padding: 1.2rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 1.5rem;
  min-height: 200px;
}

.graphBox .box{
  position: relative;
  background: #fff;
  padding: 1rem;
  width: 100%;
  border-radius: 20px;
}


/* Media Query */
@media (min-width: 768px){
  #sidebar-wrapper{
    margin-left: 0;
  }

  #page-content-wrapper{
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper{
    margin-left: -15rem;
  }
}
@media (max-width: 768px){
#menu-toggle{
  cursor: pointer;
  display:block;
}
#toggle-name{
    display:block;
}
}

@media (max-width: 991px){
  .graphBox{
    grid-template-columns: 1fr;
    height: auto;
  }
}

@media only screen and (max-width: 768px){
  .side-image{
    border-radius: 10px 10px 0 0;
    height: 100px;
    background-size: cover;
  }
}
</style>

<body>

<div class="d-flex" id="wrapper">

<!-- Sidebar Starts -->
<div class="sidebar" id="sidebar-wrapper">
  <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
    <img class="logo-sidebar" src="{{asset('/images/medboard-logo-final.png')}}">
    <p></p>
  </div>

  <div class="list-group list-group-flush my-3" >
    <a href="{{ route('adminHome') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold  text-dark">
      <i class="fa-sharp fa-solid fa-house-chimney fs-2 me-2"></i>
      Home
    </a>
    <a href="{{ route('patientView') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-dark">
      <i class="fa-sharp fa-solid fa-bed-pulse fs-2 me-2"></i>
      Patients
    </a>
    <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-dark">
      <i class="fa-solid fa-calendar-days fs-2 me-2"></i>
      Calendar
    </a>
    <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-dark">
      <i class="fa-sharp fa-solid fa-clipboard fs-2 me-2"></i>
      Forms
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-dark mt-5">
      <i class="fas fa-project-diagram fs-2 me-2"></i>
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>
</div>

<!-- Sidebar Ends -->

<!-- Navbar Starts -->
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3 px-3">
    <div class="d-flex align-items-center">
      <i class="fas fa-align-left primary-text fs-2 me-3" id="menu-toggle"></i>
      <h2 class="fs-1 m-0 ms-3" id="toggle-name">Nurse Dashboard</h2>
    </div>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item-dropdown">
          <a href="#" class="nav-link second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user fs-2 me-2"></i>
            My Profile
          </a>
          <p>Tuesday, Feb 14, 2023</p>

        </li>
      </ul>
    </div> -->

  </nav>

    <!--CARD START -->
      <!-- <main class="py-4"> -->

      <div class="ms-2">
        @yield('content')
      </div>
      
        <!-- </main> -->




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


 </body>

 </html>