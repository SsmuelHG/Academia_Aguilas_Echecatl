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
                    <a class="nav-link active" data-toggle="pill" href="#class-all">CATEGORIA MICRO 2014-2015</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">CATEGORIA MINI 2012-2013</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">CATEGORIA PASARELA 2010-2011</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">CATEGORIA CADETE 2009-2008 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class">CATEGORIA JUVENIL 2007-2006</a>
                </li>
                <li class="nav-item">
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
                                    <td><h5>IBIME</h5>VS<h5>AZTKS V.</h5></td>
                                    <td></td>
    
                                    <td><h5>AZTKS.M</h5>VS <h5>KAUYURAMI</h5></td>
                                    <td></td>
                                    <td><h5>BULLERS</h5>VS<h5>BBS</h5></td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                   
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>AZTKS.M</h5>VS<h5>KAUYURAMI</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>AZTKS.M </h5>VS<h5>BULLERS</h5></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>IBIME</h5>VS <h5>AZTKS.M</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
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
                                    <th>LUNES (VARONIL)</th>
                                    <th>MARTES(VARONIL)</th>
                                    <th>MIERCOLES (VARONIL)</th>
                                    <th>JUEVES (VARONIL)</th>
                                    <th>VIERNES (VARONIL)</th>
                                    <th>SABADO (VARONIL)</th>
                                    <th>DOMINGO (FEMENIL)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5>IBIME</h5>VS<h5>AZTKS A</h5></td>
                                    <td></td>                                  
                                    <td><h5>CLUB FAUGET</h5>VS<h5>AGUILAS EH</h5></td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>ASTEKS B</h5>VS<h5>AGUILAS EH</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>CLUB FAUGET</h5>VS<h5>TRUENO SLAM</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>IBIME</h5>VS <h5>ASTEKS B</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>AZTEKS</h5>VS<h5>KAUYUMARI</h5> </td>
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    
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
                                    <th>SABADO (FEMENIL)</th>
                                    <th>DOMINGO (FEMENIL)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5></h5><h5></h5></td>
                                    <td></td>
                                    <td><h5></h5><h5></h5></td>
                                    <td></td>
                                    <td><h5>ORLANDO</h5>VS<h5>IBIME AZUL</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>CASA BLANCA</h5>VS<h5>ORLANDO</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                    <td><h5>IBIME AZUL</h5>VS<h5>KAYUMARI</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>CASA BLANCA</h5>VS <h5>IBIME ROJO</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>KAYUMARI</h5>VS<h5>IBIME BLANCO</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
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
                                    <th>LUNES </th>
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
                                    <td><h5>IBIME AZUL</h5>VS<h5>AZTKS A</h5></td>
                                    <td></td>
                                    <td><h5>IBIME BLANCO</h5>VS <h5>AZTKS B</h5></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>IBIME AZUL</h5>VS<h5>AZTKS B</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>ZORROS BLANCOS</h5>VS<h5>KAYUMARI</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>AZTKS A</h5>VS <h5>IBIME AZUL</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>BULLERS</h5>VS<h5>NUGETS</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td> </td>
                                    <td></td>
                                    <td><h5>IBIME BLANCO</h5>VS<h5>ZORROS BLANCOS</h5> </td>
                                    <td><h5>IBIME BLANCO</h5>VS<h5>ORLANDO</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                <th>HORARIO</th>
                                    <th>LUNES </th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES </th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                    <th>DOMINGO</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td><h5>IBIME</h5>VS<h5>AZTKS</h5></td>
                                    <td></td>
                                    <td><h5>OSOS</h5>VS <h5>KAYUMARI</h5></td>
                                    <td></td>
                                    <td><h5>KAYUMARI</h5>VS<h5>ZORROS BLANCOS</h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td><h5>ONIX</h5>VS<h5>OSOS</h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td><h5>ZORROS BLANCOS</h5>VS<h5>SEVEN KINGS</h5></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td><h5>AZTKS</h5>VS <h5>ONIX</h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5>BULLERS</h5>VS<h5>NUGETS</h5> </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 4.00pm</th>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5>SEVEN KINGS</h5>VS<h5>BULLERS</h5></td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-blanco" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                <th>HORARIO</th>
                                    <th>LUNES </th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES </th>
                                    <th>VIERNES </th>
                                    <th>SABADO </th>
                                    <th>DOMINGO </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">8.00 am - 9.00am</th>
                                    <td></td>
                                    <td></td>                                  
                                    <td></td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 11.00am</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                    <td><h5></h5></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">1.00pm - 2.00pm</th>
                                    <td></td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td> </td>
                                    
                                </tr>
                                <tr>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    <td><h5> </h5> </td>
                                    <td></td>
                                    <td><h5></h5> </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>
    <!-- Class Timetable End -->
    
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">MICRO (MIXTO)</h4>
            <h4 class="display-4 font-weight-bold">TABLA DE POSICIONES</h4><br><br>

            <table class="table caption-top">
                    <caption style = "color:hsla(0,100%,50%,1);">CLASIFICACIONES</caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>    
                        <th scope="col">EQUIPOS</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">PAF</th>
                        <th scope="col">PEC</th>
                        <th scope="col">DIF</th>
                        <th scope="col">PTS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>IBIME</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>AZTKS V.</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>AZTKS M.</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">4</th>
                            <td>KAUYURAMI</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">5</th>
                            <td>BULLERS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                        </tbody>
            </table>
        </div>
        <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">MINI (VARONIL)</h4>
            <h4 class="display-4 font-weight-bold">TABLA DE POSICIONES</h4><br><br>

            <table class="table caption-top">
            <caption style = "color:hsla(0,100%,50%,1);">CLASIFICACIONES</caption>                    <thead>
                        <tr>
                        <th scope="col">#</th>    
                        <th scope="col">EQUIPOS</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">PAF</th>
                        <th scope="col">PEC</th>
                        <th scope="col">DIF</th>
                        <th scope="col">PTS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>IBIME</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>AZTKS A</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>AZTEKS B</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">4</th>
                            <td>AGUILAS EH</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            
                        </tbody>
            </table>
        </div>

        <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">PASARELA (VARONIL)</h4>
            <h4 class="display-4 font-weight-bold">TABLA DE POSICIONES</h4><br><br>

            <table class="table caption-top">
            <caption style = "color:hsla(0,100%,50%,1);">CLASIFICACIONES</caption>                    <thead>
                        <tr>
                        <th scope="col">#</th>    
                        <th scope="col">EQUIPOS</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">PAF</th>
                        <th scope="col">PEC</th>
                        <th scope="col">DIF</th>
                        <th scope="col">PTS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>IBIME ROJO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>CASA BLANCA</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>ORLANDO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">4</th>
                            <td>IBIME AZUL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            
                        </tbody>
            </table>
        </div>
        <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">CADETE (VARONIL)</h4>
            <h4 class="display-4 font-weight-bold">TABLA DE POSICIONES</h4><br><br>

            <table class="table caption-top">
            <caption style = "color:hsla(0,100%,50%,1);">CLASIFICACIONES</caption>                    <thead>
                        <tr>
                        <th scope="col">#</th>    
                        <th scope="col">EQUIPOS</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">PAF</th>
                        <th scope="col">PEC</th>
                        <th scope="col">DIF</th>
                        <th scope="col">PTS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>IBIME AZUL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>IBIME BLANCO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>AZTKS A</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">4</th>
                            <td>AZTKS B</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">5</th>
                            <td>ZORROS BLANCO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">6</th>
                            <td>KATUMARI</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">7</th>
                            <td>ORLANDO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                        </tbody>
            </table>
        </div>
        <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">JUVENIL (VARONIL)</h4>
            <h4 class="display-4 font-weight-bold">TABLA DE POSICIONES</h4><br><br>

            <table class="table caption-top">
            <caption style = "color:hsla(0,100%,50%,1);">CLASIFICACIONES</caption>                    <thead>
                        <tr>
                        <th scope="col">#</th>    
                        <th scope="col">EQUIPOS</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">PAF</th>
                        <th scope="col">PEC</th>
                        <th scope="col">DIF</th>
                        <th scope="col">PTS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>IBIME</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>AZTKS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>ONIX</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">4</th>
                            <td>OSOS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">5</th>
                            <td>KAYUMARI</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">6</th>
                            <td>ZORROS BLANCOS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">7</th>
                            <td>SEVEN KINGS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">8</th>
                            <td>BULLERS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                            <th scope="row">9</th>
                            <td>NUGGETS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>
                        </tbody>
            </table>
        </div>
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