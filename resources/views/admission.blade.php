<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Admission Form</title>
</head>

<body>
    <div class="container-sm border m-5 p-5" style="height:600px;">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item" class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="prev"><a
                        class="page-link" href="">1</a></li>
                <li class="page-item" class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next"><a
                        class="page-link" href="">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Room ID</th>
                                <th scope="col">Admitting Doctor ID</th>
                                <th scope="col">Attending Doctor ID</th>
                                <th scope="col">Doctor Order ID</th>
                                <th scope="col">Date Time Admitted</th>
                                <th scope="col">Complain</th>
                                <th scope="col">Id</th>
                                <th scope="col">Patient ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="carousel-item">
                    <table id="table2" class="table">
                        <thead>
                            <tr>
                            <tr>
                                <th scope="col">Impression Diagnosis</th>
                                <th scope="col">Age</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Activities</th>
                                <th scope="col">Diet</th>
                                <th scope="col">Tubes</th>
                                <th scope="col">Special Information</th>
                                <th scope="col">Date Time Discharge</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-block">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-block">Next</span>
            </button>
        </div>

        <form>
            <div class="mb-3" id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>