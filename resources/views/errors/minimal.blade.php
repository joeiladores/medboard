<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

</head>

<body>
    <main class="main-content">
        <div class="wrapper">
            <div class="gradient">
                <div class="container">
                    <h1>@yield('code')</h1>
                    <h2 class="mb-0 mt-4 text-white">
                        Oops! This Page is @yield('message').</h2>
                    {{-- <p class="mt-2 text-white">The requested page does not exist.</p> --}}
                    <a class="btn bg-white text-primary d-inline-flex align-items-center mt-3"
                        href="{{ route('home') }}">
                        Back to Home</a>
                </div>
                <!-- <div class="box">
                    <div class="c xl-circle">
                        <div class="c lg-circle">
                            <div class="c md-circle">
                                <div class="c sm-circle">
                                    <div class="c xs-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
</body>

</html>