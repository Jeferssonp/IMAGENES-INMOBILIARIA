<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
<body class="ingreso">






<form action="validar.php" method="post">


    <div class="container-fluid sticky-top bg-dark  shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark  navbar-dark py-3 py-lg-0">
            <a href="../index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>IMAGENES-INMOBILIARIA</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Acerca de nosotros</a>


                    
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
                     <a href="#" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Registrar Inmueble<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
































 <!-- Registro -->
    <div class="login-box">
     <h1>Ingreso</h1>
<div class="textbox">
    <i class="fa-solid fa-user"></i>



    <input type="text" placeholder="ingrese su usuario" name="Correo">
</div>
<div class="textbox" >
    <i class="fa-solid fa-lock"></i>


    <input type="password"  placeholder="Ingrese tu contraseña" name="Contraseña" >
</div>

<input class="btn" type="submit" value="Ingresar">
<a href="../index.html"><input class="btn" type="button"  value="regresar" > </a>

<a href="#">¿Has olvidado la contraseña?</a>
<a href="../inscribirse.php">¿crear cuenta nueva</a>


</form>
</body>
</html>