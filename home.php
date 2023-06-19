<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Coffee Express</a>
            <form class="d-flex" role="search">
                <button type="button" class="btn btn-dark mt-3 form-control "><a href="logout.php" class="text-light">LogOut</a></button>
                <button type="button" class="btn btn-dark mt-3 form-control ms-3"><a href="add.php" class="text-light">Add</a></button>
            </form>
        </div>
    </nav>
    <!-- Banner -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/21592924_6479604.jpg" class="d-block w-100" alt="" />
            </div>
        </div>
    </div>


    <!-- card -->
    <h1 class="text-center mt-5 text-danger-emphasis">Our Coffee Gallery</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3 ">
        <div class="col">
            <div class="card h-100">
                <img src="./images/1.png" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./images/1.png" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./images/1.png" class="card-img-top" alt="...">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 9.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 10.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 11.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 12.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 13.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="./images/cups/Rectangle 14.png" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white">Coffee_Express</a>
        </div>
        <!-- Copyright -->
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>