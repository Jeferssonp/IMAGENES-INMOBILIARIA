<?php
include_once("../Registros_e_ingreso/database.php");

?>


<html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Publicaciones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
      <!-- Informacion como oficina correo y telefono -->
      <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Nuestra oficina</h6>
                        <span> Bogotá, Calle 28, COLOMBIA
<br>    villavicencio Carrera 15, Colombia  </br>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Correo electronico</h6>
                        <span>imaginacioninmobiliaria@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Llámanos</h6>
                        <span>+57 3189998763</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->








    
    <!-- Navbar Start -->
    <!-- el incio de la pagina -->
    <div class="container-fluid sticky-top bg-dark  shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark  navbar-dark py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>IMAGENES-INMOBILIARIA</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse"> 
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.php" class="nav-item nav-link active">Inicio</a> 
                    <a href="../about.html" class="nav-item nav-link">Acerca de nosotros</a>


                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Servicio al cliente</a>
                            <a href="#" class="dropdown-item">Informacion</a>
                            <a href="#" class="dropdown-item">Contactenos</a>
                             <a href="#" class="dropdown-item">Quejas y reclamos</a>
                        </div>
                    </div>
                    
                  <!--   <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publicaciones</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.html" class="dropdown-item">Casas</a>
                            <a href="team.html" class="dropdown-item">Apartamentos</a>
                            <a href="testimonial.html" class="dropdown-item">Fincas</a>
                            <a href="blog.html" class="dropdown-item">Lotes</a>
                            <a href="detail.html" class="dropdown-item">TODOS</a>
                        </div>
                    </div> -->
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publicaciones</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Arriendo</a>
                            <a href="#" class="dropdown-item">Ventas</a>
                            <a href="#" class="dropdown-item">Vacacional</a>
                        </div>
                    </div> 
                    <a href="./Registros_e_ingreso/iniciodesesion.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Iniciar sesion<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


<div class="container mt-5">
		<a class="fa fa-arrow-left text-primary" href="vista_formulario.php">VOLVER</a><br/><br/>
        <div class="title h1 text-center">PUBLICACIONES RECIENTES</div>

<?php
			$sql = "SELECT * FROM publicaciones";
			$stm = $con->query($sql);
			while ($datos = $stm->fetch_object()){
			?>

<div class="container py-3">
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title"><?php echo $datos->titulo; echo ", "; echo $datos->ciudad?><br>
          <p class="text-body">
          <?php echo $datos->direccion;echo ", "; echo $datos-> direccion2?>
          </p>
          <p class="text-body">
          <?php echo $datos->descripcion?>
          </p>
          <p class="text-body">PRECIO: <?php echo $datos->precio?></p>
          <p class="text-body">Departamento: <?php echo $datos->departamento?></p>
          <p class="text-uppercase text-primary"><?php echo $datos->tipo?></p>
          <br>
          <a href="#" class="mt-auto btn btn-primary btn-sm">Contactar</a>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid img-thumbnail" src="data:<?php echo $datos->img_type; ?>;base64, <?php echo base64_encode($datos->imagenes); ?>" alt="">
            </div>
            <div class="carousel-item">
              <img class="img-fluid img-thumbnail" src="data:<?php echo $datos->img_type; ?>;base64, <?php echo base64_encode($datos->imagenes); ?>" alt="">
            </div>
            <div class="carousel-item">
              <img class="img-fluid img-thumbnail"src="data:<?php echo $datos->img_type; ?>;base64, <?php echo base64_encode($datos->imagenes); ?>" alt="">
            </div>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

</div>


<?php
}
?>
        </div>


        <!-- Footer Start -->
        <!-- informate envia correo y no se que  -->
        <div class="footer container-fluid position-relative bg-dark  text-white-50 py-6 px-5">
            <div class="row g-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>COL-INMUEBLES</h1>
                    </a>
                    <p>TRABAJAMOS PARA PRESTAR SERVICIOS DE MEDIACIÓN, ASESORAMIENTO Y GESTIÓN EN TRANSACCIONES INMOBILIARIAS..</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>Bogotá, Calle 28,Colombia </p>
                    <p><i class="fa fa-map-marker-alt me-2"></i> villavicencio Carrera 15, cOLOMBIA</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+57 3189998763</p>
                    <p><i class="fa fa-envelope me-2"></i>COL-INMUEBLESINFO@gmail.com</p>
                    <p><i class="fa fa-envelope me-2"></i>imaginacioninmobiliaria@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                        <div class="col-sm-6">
                            <h4 class="text-white text-uppercase mb-4">Links populares</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Acerca de nosotros</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Nuestros servicios</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Publicaciones</a>
                             
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-white text-uppercase mb-4">INFÓRMATE</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 20px 30px;" placeholder="Correo electronico"><button class="btn btn-primary px-4">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top border-primary px-0">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="py-4 px-5 text-center text-md-start">
                    <p class="mb-0">&copy; <a class="text-primary" href="#">COL-INMOBILIARIA</a>. Todos los derechos reservados.</p>
                </div>
                <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                    <p class="mb-0">Desarrollador <a class="text-dark" href="#">Alejandro Gutierrez</a></p>
                    <p class="mb-0">Desarrollador <a class="text-dark" href="#">Jefersson Pinzon</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->




</body>

</html>