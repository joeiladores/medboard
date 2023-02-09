<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="/style.css">

</head>

<body class="bg-light">
    <main class="main-content">
        <div class="wrapper">
            <div class="container-md m-5 p-5 justify-content-center">
                <h1>@yield('code')</h1>
                <h2 class="mb-0 mt-4">
                    Oops! This Page is @yield('message').</h2>
                {{-- <p class="mt-2 text-white">The requested page does not exist.</p> --}}

                @if(Auth::user()->usertype == 'doctor')
                <a class="btn bg-secondary text-white d-inline-flex align-items-center mt-3" href="{{ route('doctor') }}">
                    Back to Home
                </a>
                @endif
                @if(Auth::user()->usertype == 'nurse')
                <a class="btn bg-secondary text-white d-inline-flex align-items-center mt-3" href="{{ route('nurse') }}">
                    Back to Home
                </a>
                @endif
            </div>

        </div>
    </main>
</body>

</html>