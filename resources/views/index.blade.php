<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Academia Aguilas Echecatl</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- LINK DE BOOTSTRAP5 -->

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
                    <a href="{{route('index')}}" class="nav-item nav-link active">Inicio</a>
                    <a href="{{route('about')}}"class="nav-item nav-link">Sobre Nosotros</a>
                    <a href="{{route('feature')}}" class="nav-item nav-link">Equipos</a>
                    <a href="{{route('class')}}" class="nav-item nav-link">Jornadas</a>
                    
                    <div class="nav-item dropdown">
                        
                    
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Reglas</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Academia Aguilas echecatl</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">La mejor liga</h2>
                        <a href="{{route('class')}}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Proximos Partidos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Academia Aguilas echecatl</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">La mejor Liga</h2>
                        <a href="{{route('about')}}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Conocenos</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">Año de Experiencia</h2>
                <p>Siendo los Mejores en lo que hacemos y para quienes lo hacemos</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class=""></i>
                        <h4 class="font-weight-bold">Micro</h4>
                        <p>Entre 5 y 8 años</p>
                    </div>
                    <div class="col-sm-6">
                        <i class=""></i>
                        <h4 class="font-weight-bold">Mini</h4>
                        <p>Entre 9 y 11 años</p>
                    </div>
                    <div class="col-sm-6">
                        <i class=""></i>
                        <h4 class="font-weight-bold">Pasarela</h4>
                        <p>Entre 12 y 13 años</p>
                    </div>
                </div>
                <a href="{{route('about')}}" class="btn btn-lg px-4 btn-outline-primary">Conocenos</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">MICRO</h2>
                        <p> es un juego, basado en el baloncesto, para niños y niñas de categoría alevín, es decir, que tengan 5 a 8 años en el año en que se inicia la competición. Sin embargo, en el itinerario de iniciación al rendimiento, solo podrán participar escolares de segundo año de alevín.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">MINI</h2>
                        <p>En la Liga Mini, se utilizan aros de menor altura y balones de tamaño reducido para facilitar el aprendizaje y la participación de los niños. Además, se suelen aplicar reglas modificadas para adaptarse a su nivel de desarrollo y promover la participación equitativa.</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">PASARELA</h2>
                        <p> es un juego, basado en el baloncesto, para niños y niñas de categoría alevín, es decir, que tengan 10 o 11 años en el año en que se inicia la competición. Sin embargo, en el itinerario de iniciación al rendimiento, solo podrán participar escolares de segundo año de alevín.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <!--<h4 class="text-primary font-weight-bold">Why Choose Us?</h4>-->
            <h4 class="display-4 font-weight-bold">Mejores Equipos de la Temporada Anterior</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-1.jpg" alt="Image">
                        
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">BST</h4>
                        <p>DEFINICION BREVE DEL EQUIPO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-2.jpg" alt="Image">
                        
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">TEC COL</h4>
                        <p>DEFINICION BREVE DEL EQUIPO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-3.jpg" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">ASTROS</h4>
                        <p>DEFINICION BREVE DEL EQUIPO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-4.jpg" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">LOS DRAGONES</h4>
                        <p>DEFINICION BREVE DEL EQUIPO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
   
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">ARBITROS PROFESIONALES</h4>
            <h4 class="display-4 font-weight-bold">PARA ASEGURAR QUE LOS PARTIDOS SEAN JUSTOS</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-1.jpg" alt="">
                    
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">ARBITRO 1</h4>
                        <p class="card-text"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-2.jpg" alt="">
                    
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">ARBITRO 2</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-3.jpg" alt="">
                    
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">ARBITRO 3</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                   
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">ARBITRO 4</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
   
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Reglas Principales</h4>
            <h4 class="display-4 font-weight-bold">------------------</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    
                    <div class="pl-3">
                        <h3 class="display-4 font-weight-bold">EQUIPOS</h3>
                    </div>
                </div>
                <p>El baloncesto se juega entre dos equipos de cinco jugadores cada uno. Cada equipo tiene como objetivo marcar puntos lanzando la pelota en el aro contrario y evitar que el otro equipo anote.</p>
                
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    
                    <div class="pl-3">
                        <h3 class="display-4 font-weight-bold">DURACION DE JUEGO</h3>
                       
                    </div>
                    
                </div>
                <p>Un partido de baloncesto se divide en cuatro períodos de tiempo, generalmente de 10 minutos cada uno en competiciones profesionales. Sin embargo, las reglas pueden variar dependiendo del nivel de juego.</p>
                   <div class="center">
                        <a class="btn btn-outline-primary mt-2 px-3"  href="{{route('contact')}}">Mas Reglas <i class="fa fa-angle-right"></i></a>
                    </div>
                    


            </div>

        </div>
    </div>
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
</body>

</html>