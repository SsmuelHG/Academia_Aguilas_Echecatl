<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Academia Aguilas Echecatl</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">🏀AAE🏀</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="{{route('index')}}" class="nav-item nav-link">Inicio</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">Sobre Nosotros</a>
                    <a href="{{route('feature')}}" class="nav-item nav-link">Equipos</a>
                    <a href="{{route('class')}}" class="nav-item nav-link active">Jornadas</a>
                    <div class="nav-item dropdown">
                        
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Reglas</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">JORNADAS</h4>
           
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">La mejor Liga</h2>
               
                </div>
                
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Calendario de Torneo</h4>
            <h4 class="display-4 font-weight-bold">Para no perderte ningun partido de tus equipos favoritos</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">SEMANA 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">SEMANA 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">SEMANA 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">SEMANA 4</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>HORARIO</th>
                                    <th>LUNES</th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES</th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                    <th>DOMINGO</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5>BST</h5>VS<h5>ASTROS</h5></td>
                                    <td></td>
                                    <td><h5>CLUB FAUGET</h5>VS <h5>ALL STARS</h5></td>
                                    <td></td>
                                    <td><h5>TOURMENT</h5>VS<h5>BBS</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>BST</h5>VS<h5>LOS DRAGONES</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>SLAM TRUNK</h5>VS<h5>TRUENO SLAM</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>LOS DRAGONES</h5>VS <h5>TEC COL</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>CLUB FAUGET</h5>VS<h5>BBT</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5>LOS DRAGONES</h5>VS<h5>BSS</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                <th>HORARIO</th>
                                    <th>LUNES</th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES</th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                    <th>DOMINGO</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5>TOURMENT</h5>VS<h5>ALL STRARS</h5></td>
                                    <td></td>
                                    <td><h5>BSS</h5>VS <h5>BST</h5></td>
                                    <td></td>
                                    <td><h5>SLAM TRUNK</h5>VS<h5>ALL STARS</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>BBS</h5>VS<h5>LOS DRAGONES</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>CLUB FAUGET</h5>VS<h5>TRUENO SLAM</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>LOS DRAGONES</h5>VS <h5>ASTROS</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>TEC COL</h5>VS<h5>TRUENO SLAM</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5>ASTROS</h5>VS<h5>TOURMENT</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                <th>HORARIO</th>
                                    <th>LUNES</th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES</th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                    <th>DOMINGO</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5></h5><h5></h5></td>
                                    <td></td>
                                    <td><h5></h5><h5></h5></td>
                                    <td></td>
                                    <td><h5>LOS DRAGONES</h5>VS<h5>ASTROS</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>ALL STARS</h5>VS<h5>CLUB FAUGET</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5></h5><h5></h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>LOS DRAGONES</h5>VS <h5>TEC COL</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>CLUB FAUGET</h5>VS<h5>BBT</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5>LOS DRAGONES</h5>VS<h5>BSS</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                <th>HORARIO</th>
                                    <th>LUNES</th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES</th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                    <th>DOMINGO</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5>BST</h5>VS<h5>ASTROS</h5></td>
                                    <td></td>
                                    <td><h5>CLUB FAUGET</h5>VS <h5>ALL STARS</h5></td>
                                    <td></td>
                                    <td><h5>TOURMENT</h5>VS<h5>BBS</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>BST</h5>VS<h5>LOS DRAGONES</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>SLAM TRUNK</h5>VS<h5>TRUENO SLAM</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>LOS DRAGONES</h5>VS <h5>TEC COL</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>CLUB FAUGET</h5>VS<h5>BBT</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5>LOS DRAGONES</h5>VS<h5>BSS</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>
    <!-- Class Timetable End -->
    

       <!-- Blog Start -->
       
    <!-- Blog End -->


    <!-- Footer Start -->
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
</body>

</html>