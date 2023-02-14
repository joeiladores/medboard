<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/medboard-logo.png">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS-->
    <link rel="stylesheet" href="/style.css">

</head>

<body class="bg-light">
    <div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header primary-bg text-light">
                        <h2>@yield('code')</h3>
                    </div>

                    <div class="card-body">

                        <div class="px-5 my-5">
                            <h5>Oops! This Page is @yield('message').</h5>
                            @if(auth()->user()->status == 'inactive')
                                <p class="mt-3 fs-6">Your account is not active. Please contact the admin</p>
                            @endif
                        </div>
                        @if(auth()->user()->status == 'inactive')
                        <div class="px-5 mb-5">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-secondary" role="button">                                
                                {{ 'Logout' }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                        </div>
                        @else                        
                        <div class="px-5 mb-5">
                            @if(auth()->user()->usertype == 'admin')
                                <a href="{{ route('adminHome') }}" class="btn btn-secondary" role="button">                                
                            @elseif(auth()->user()->usertype == 'doctor')
                                <a href="{{ route('doctorHome') }}" class="btn btn-secondary" role="button">
                            @else
                                <a href="{{ route('nurseHome') }}" class="btn btn-secondary" role="button">
                            @endif
                                {{ 'Back to Home' }}
                                </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>